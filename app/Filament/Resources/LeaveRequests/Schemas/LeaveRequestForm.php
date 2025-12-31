<?php

namespace App\Filament\Resources\LeaveRequests\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LeaveRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('employee_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('school_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('leave_type_id')
                    ->numeric()
                    ->default(null),
                DatePicker::make('start_date')
                    ->required(),
                DatePicker::make('end_date')
                    ->required(),
                TextInput::make('total_days')
                    ->required()
                    ->numeric(),
                TextInput::make('reason')
                    ->required(),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'approved' => 'Approved', 'rejected' => 'Rejected'])
                    ->required(),
                TextInput::make('approved_by')
                    ->numeric()
                    ->default(null),
                DateTimePicker::make('approved_at'),
                TextInput::make('declined_reason')
                    ->default(null),
                TextInput::make('attachment_path')
                    ->default(null),
            ]);
    }
}
