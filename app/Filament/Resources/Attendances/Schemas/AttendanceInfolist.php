<?php

namespace App\Filament\Resources\Attendances\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AttendanceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('employee_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('school_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('date')
                    ->date(),
                TextEntry::make('check_in_time')
                    ->time(),
                TextEntry::make('check_out_time')
                    ->time(),
                TextEntry::make('check_in_location'),
                TextEntry::make('check_out_location'),
                IconEntry::make('is_late')
                    ->boolean(),
                TextEntry::make('minutes_late')
                    ->numeric(),
                TextEntry::make('work_time')
                    ->time(),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
