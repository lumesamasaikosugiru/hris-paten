<?php

namespace App\Filament\Resources\JobApplicants;

use App\Filament\Resources\JobApplicants\Pages\CreateJobApplicant;
use App\Filament\Resources\JobApplicants\Pages\EditJobApplicant;
use App\Filament\Resources\JobApplicants\Pages\ListJobApplicants;
use App\Filament\Resources\JobApplicants\Pages\ViewJobApplicant;
use App\Filament\Resources\JobApplicants\Schemas\JobApplicantForm;
use App\Filament\Resources\JobApplicants\Schemas\JobApplicantInfolist;
use App\Filament\Resources\JobApplicants\Tables\JobApplicantsTable;
use App\Models\JobApplicant;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JobApplicantResource extends Resource
{
    protected static ?string $model = JobApplicant::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'JobApplicant';

    public static function form(Schema $schema): Schema
    {
        return JobApplicantForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JobApplicantInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobApplicantsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJobApplicants::route('/'),
            'create' => CreateJobApplicant::route('/create'),
            'view' => ViewJobApplicant::route('/{record}'),
            'edit' => EditJobApplicant::route('/{record}/edit'),
        ];
    }
}
