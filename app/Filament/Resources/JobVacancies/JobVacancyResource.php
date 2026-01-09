<?php

namespace App\Filament\Resources\JobVacancies;

use App\Filament\Resources\JobVacancies\Pages\CreateJobVacancy;
use App\Filament\Resources\JobVacancies\Pages\EditJobVacancy;
use App\Filament\Resources\JobVacancies\Pages\ListJobVacancies;
use App\Filament\Resources\JobVacancies\Pages\ViewJobVacancy;
use App\Filament\Resources\JobVacancies\Schemas\JobVacancyForm;
use App\Filament\Resources\JobVacancies\Schemas\JobVacancyInfolist;
use App\Filament\Resources\JobVacancies\Tables\JobVacanciesTable;
use App\Models\JobVacancy;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JobVacancyResource extends Resource
{
    protected static ?string $model = JobVacancy::class;
    protected static ?string $pluralModelLabel = 'Lowongan Pekerjaan';


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocument;
    protected static string|UnitEnum|null $navigationGroup = 'Hiring & Screenings';


    protected static ?string $recordTitleAttribute = 'JobVacancy';

    public static function form(Schema $schema): Schema
    {
        return JobVacancyForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JobVacancyInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobVacanciesTable::configure($table);
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
            'index' => ListJobVacancies::route('/'),
            'create' => CreateJobVacancy::route('/create'),
            'view' => ViewJobVacancy::route('/{record}'),
            'edit' => EditJobVacancy::route('/{record}/edit'),
        ];
    }
}
