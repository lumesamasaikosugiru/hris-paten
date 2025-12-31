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
                TextInput::make('user_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('school_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('department_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('position_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('applicant_biodata_id')
                    ->numeric()
                    ->default(null),
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
