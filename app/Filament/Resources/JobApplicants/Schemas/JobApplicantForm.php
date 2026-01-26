<?php

namespace App\Filament\Resources\JobApplicants\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JobApplicantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('applicant_biodata_id')
                    ->label('Pelamar')
                    ->placeholder('pilih data pelamar')
                    ->relationship(
                        'applicantBiodata',
                        'fullname',
                        function ($query) {
                            $query->whereDoesntHave('employee', function ($q) {
                                $q->where('status', 'active');
                            });
                        }
                    )
                    ->searchable()
                    ->preload()
                    ->noSearchResultsMessage('Data pelamar tidak ditemukan!')
                    ->required(),

                Select::make('job_vacancy_id')
                    ->label('Lowongan Pekerjaan')
                    ->placeholder('lowongan pekerjaan yang tersedia')
                    ->relationship('jobVacancy', 'job_title')
                    ->searchable()
                    ->preload()
                    ->noSearchResultsMessage('Saat ini belum dibuka untuk loker tersebut')
                    ->required(),

                Select::make('status')
                    ->options([
                        'submitted' => 'Submitted',
                        'screening' => 'Screening',
                        'accepted' => 'Accepted',
                        'rejected' => 'Rejected',
                    ])
                    ->placeholder('Pilih status')
                    ->required(),

                DatePicker::make('date_submitted')
                    ->label('Tanggal Eksekusi')
                    ->native(false)
                    ->placeholder(now()->startOfMonth())
                    ->defaultFocusedDate(now()->startOfMonth())
                    ->required(),
            ]);
    }
}
