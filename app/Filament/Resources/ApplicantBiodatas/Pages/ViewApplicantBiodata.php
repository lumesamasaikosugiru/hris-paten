<?php

namespace App\Filament\Resources\ApplicantBiodatas\Pages;

use App\Filament\Resources\ApplicantBiodatas\ApplicantBiodataResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewApplicantBiodata extends ViewRecord
{
    protected static string $resource = ApplicantBiodataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
