<?php

namespace App\Filament\Resources\LeaveTypes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LeaveTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('default_days')
                    ->required()
                    ->numeric(),
                Toggle::make('is_quota_based')
                    ->required(),
                Select::make('gender_restriction')
                    ->options(['male' => 'Male', 'female' => 'Female'])
                    ->required(),
                Select::make('repeat_cycle')
                    ->options(['year' => 'Year', 'once' => 'Once', 'none' => 'None'])
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
