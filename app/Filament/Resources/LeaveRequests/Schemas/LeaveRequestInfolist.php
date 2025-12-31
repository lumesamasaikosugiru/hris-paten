<?php

namespace App\Filament\Resources\LeaveRequests\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LeaveRequestInfolist
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
                TextEntry::make('leave_type_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('start_date')
                    ->date(),
                TextEntry::make('end_date')
                    ->date(),
                TextEntry::make('total_days')
                    ->numeric(),
                TextEntry::make('reason'),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('approved_by')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('approved_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('declined_reason')
                    ->placeholder('-'),
                TextEntry::make('attachment_path')
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
