<?php

namespace App\Filament\Resources\JobApplicants\Pages;

use App\Filament\Resources\JobApplicants\JobApplicantResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewJobApplicant extends ViewRecord
{
    protected static string $resource = JobApplicantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
