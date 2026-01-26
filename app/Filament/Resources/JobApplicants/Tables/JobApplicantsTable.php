<?php

namespace App\Filament\Resources\JobApplicants\Tables;

use App\Models\Employee;
use App\Models\JobApplicant;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobApplicantsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('applicantBiodata.fullname')
                    ->label('Pelamar')
                    ->searchable(),
                TextColumn::make('jobVacancy.job_title')
                    ->label('Lowongan')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge(),
                TextColumn::make('date_submitted')
                    ->date()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                Action::make('acceptAndCreateEmployee')
                    ->label('Terima & Jadikan Pegawai')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn($record) => in_array($record->status, ['submitted', 'screening']))
                    ->authorize(fn() => auth()->user()->can('accept_job_applicant'))
                    ->action(function ($record) {
                        DB::transaction(function () use ($record) {
                            $applicant = $record->applicantBiodata;

                            if (!$applicant) {
                                throw new \Exception('Applicant Biodata tidak ditemukan!');
                            }

                            if ($applicant->employee) {
                                Notification::make()
                                    ->title('Aksi dibatalkan')
                                    ->body('Pelamar ini sudah terdaftar sebagai pegawai aktif!')
                                    ->danger()
                                    ->send();

                                return;
                            }

                            $user = User::where('name', $applicant->fullname)->first();

                            if (!$user) {
                                $baseEmail = Str::slug($applicant->fullname);
                                $email = $baseEmail . '@hris.local';

                                $counter = 1;
                                while (User::where('email', $email)->exists()) {
                                    $email = $baseEmail . '-' . $counter . '@hris.local';
                                    $counter++;
                                }
                                $user = User::create([
                                    'name' => $applicant->fullname,
                                    'email' => $email,
                                    'password' => bcrypt('123123123'),
                                    'is_active' => true,
                                ]);

                                $user->assignRole('Employee');

                            }

                            Employee::create([
                                'user_id' => $user->id,
                                'applicant_biodata_id' => $applicant->id,
                                'school_id' => null,
                                'department_id' => null,
                                'position_id' => null,
                                'hire_date' => now(),
                                'status' => 'active',
                            ]);

                            $record->update([
                                'status' => 'accepted'
                            ]);

                            JobApplicant::where('applicant_biodata_id', $applicant->id)
                                ->where('id', '!=', $record->id)
                                ->update(['status' => 'rejected']);

                        });
                    })
            ])

            ->filters([
                //
            ])
            // ->recordActions([
            //     ViewAction::make(),
            //     EditAction::make(),
            // ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);

    }
}
