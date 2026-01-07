<?php

namespace App\Filament\Resources\Attendances\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AttendanceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('employee_id')
                    ->relationship('employee', 'user_id')
                    ->default(null),
                TextInput::make('school_id')
                    ->numeric()
                    ->default(null),
                DatePicker::make('date')
                    ->required(),
                TimePicker::make('check_in_time')
                    ->required(),
                TimePicker::make('check_out_time')
                    ->required(),
                TextInput::make('check_in_location')
                    ->required(),
                TextInput::make('check_out_location')
                    ->required(),
                Toggle::make('is_late')
                    ->required(),
                TextInput::make('minutes_late')
                    ->required()
                    ->numeric()
                    ->default(0),
                TimePicker::make('work_time')
                    ->required(),
                Select::make('status')
                    ->options(['present' => 'Present', 'absent' => 'Absent', 'remote' => 'Remote', 'leave' => 'Leave'])
                    ->required(),
            ]);
    }
}
