<?php

namespace App\Filament\Resources\JobVacancies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class JobVacancyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('job_title')
                    ->required(),
                Textarea::make('job_desc')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('requirements')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('salary')
                    ->numeric()
                    ->default(null),
            ]);
    }
}
