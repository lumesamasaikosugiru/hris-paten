<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EmployeeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('school_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('department_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('position_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('applicant_biodata_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('hire_date')
                    ->date(),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('photopath')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
