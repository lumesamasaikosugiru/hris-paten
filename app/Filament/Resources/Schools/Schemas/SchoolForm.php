<?php

namespace App\Filament\Resources\Schools\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SchoolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('level')
                    ->options(['tk' => 'Tk', 'tpa' => 'Tpa', 'smp' => 'Smp', 'smk' => 'Smk', 's1' => 'S1'])
                    ->required(),
                TextInput::make('address')
                    ->default(null),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
            ]);
    }
}
