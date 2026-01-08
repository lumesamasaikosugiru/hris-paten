<?php

namespace App\Filament\Resources\ApplicantBiodatas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ApplicantBiodataInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('ktp'),
                TextEntry::make('fullname'),
                TextEntry::make('gender')
                    ->badge(),
                TextEntry::make('birthday')
                    ->date(),
                TextEntry::make('address_street'),
                TextEntry::make('address_district'),
                TextEntry::make('address_city'),
                TextEntry::make('marital_status')
                    ->badge(),
                TextEntry::make('ethnicity')
                    ->placeholder('-'),
                TextEntry::make('phone'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
