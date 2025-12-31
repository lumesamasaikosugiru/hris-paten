<?php

namespace App\Filament\Resources\JobApplicants\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JobApplicantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('applicant_biodata_id')
                    ->required()
                    ->numeric(),
                TextInput::make('job_vacancy_id')
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options([
            'submitted' => 'Submitted',
            'screening' => 'Screening',
            'accepted' => 'Accepted',
            'rejected' => 'Rejected',
        ])
                    ->required(),
                DatePicker::make('date_submitted')
                    ->required(),
            ]);
    }
}
