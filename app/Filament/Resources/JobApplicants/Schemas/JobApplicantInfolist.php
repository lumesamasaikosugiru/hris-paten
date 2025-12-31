<?php

namespace App\Filament\Resources\JobApplicants\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class JobApplicantInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('applicant_biodata_id')
                    ->numeric(),
                TextEntry::make('job_vacancy_id')
                    ->numeric(),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('date_submitted')
                    ->date(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
