<?php

namespace App\Filament\Resources\LeaveTypes\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LeaveTypeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('default_days')
                    ->numeric(),
                IconEntry::make('is_quota_based')
                    ->boolean(),
                TextEntry::make('gender_restriction')
                    ->badge(),
                TextEntry::make('repeat_cycle')
                    ->badge(),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
