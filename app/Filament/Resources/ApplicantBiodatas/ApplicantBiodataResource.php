<?php

namespace App\Filament\Resources\ApplicantBiodatas;

use App\Filament\Resources\ApplicantBiodatas\Pages\CreateApplicantBiodata;
use App\Filament\Resources\ApplicantBiodatas\Pages\EditApplicantBiodata;
use App\Filament\Resources\ApplicantBiodatas\Pages\ListApplicantBiodatas;
use App\Filament\Resources\ApplicantBiodatas\Pages\ViewApplicantBiodata;
use App\Filament\Resources\ApplicantBiodatas\Schemas\ApplicantBiodataForm;
use App\Filament\Resources\ApplicantBiodatas\Schemas\ApplicantBiodataInfolist;
use App\Filament\Resources\ApplicantBiodatas\Tables\ApplicantBiodatasTable;
use App\Models\ApplicantBiodata;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ApplicantBiodataResource extends Resource
{
    protected static ?string $model = ApplicantBiodata::class;
    protected static ?string $pluralModelLabel = 'Biodata Pelamar';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;
    protected static string|UnitEnum|null $navigationGroup = 'Hiring & Screenings';


    protected static ?string $recordTitleAttribute = 'ApplicantBiodata';

    public static function form(Schema $schema): Schema
    {
        return ApplicantBiodataForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ApplicantBiodataInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ApplicantBiodatasTable::configure($table);
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
            'index' => ListApplicantBiodatas::route('/'),
            'create' => CreateApplicantBiodata::route('/create'),
            'view' => ViewApplicantBiodata::route('/{record}'),
            'edit' => EditApplicantBiodata::route('/{record}/edit'),
        ];
    }
}
