<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Akun Pengguna')
                    ->required(),
                Select::make('school_id')
                    ->relationship('school', 'name')
                    ->label('Sekolah')
                    ->required(),
                Select::make('department_id')
                    ->relationship('department', 'name')
                    ->label('Bidang Posisi')
                    ->required(),
                Select::make('position_id')
                    ->relationship('position', 'name')
                    ->label('Jabatan')
                    ->required(),
                Select::make('applicant_biodata_id')
                    ->relationship('applicantBio', 'fullname')
                    ->label('Pelamar')
                    ->default('null'),
                DatePicker::make('hire_date')
                    ->required(),
                Select::make('status')
                    ->options(['active' => 'Active', 'inactive' => 'Inactive'])
                    ->required(),
                TextInput::make('photopath')
                    ->default(null),
            ]);
    }
}
