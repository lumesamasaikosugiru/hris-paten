<?php

namespace App\Filament\Resources\ApplicantBiodatas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ApplicantBiodataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('ktp')
                    ->required(),
                TextInput::make('fullname')
                    ->required(),
                Select::make('gender')
                    ->options(['L' => 'L', 'P' => 'P'])
                    ->required(),
                DatePicker::make('birthday')
                    ->required(),
                TextInput::make('address_street')
                    ->required(),
                TextInput::make('address_district')
                    ->required(),
                TextInput::make('address_city')
                    ->required(),
                Select::make('marital_status')
                    ->options([
            'single' => 'Single',
            'married' => 'Married',
            'widowed' => 'Widowed',
            'divorced' => 'Divorced',
            'separated' => 'Separated',
        ])
                    ->required(),
                TextInput::make('ethnicity')
                    ->default(null),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
            ]);
    }
}
