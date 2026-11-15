<?php

namespace App\Filament\Resources\StudyProgramSections\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class StudyProgramSectionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                ImageEntry::make('image_url')
                    ->disk('public')
                    ->visibility('public'),
                TextEntry::make('description')
                    ->columnSpanFull(),
                TextEntry::make('detail_url'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
