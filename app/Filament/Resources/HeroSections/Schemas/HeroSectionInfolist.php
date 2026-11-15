<?php

namespace App\Filament\Resources\HeroSections\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HeroSectionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('accreditation'),
                TextEntry::make('total_industry_partner')
                    ->numeric(),
                TextEntry::make('total_number_of_graduate')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
