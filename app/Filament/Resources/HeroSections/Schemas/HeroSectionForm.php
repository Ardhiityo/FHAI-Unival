<?php

namespace App\Filament\Resources\HeroSections\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('accreditation')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('total_industry_partner')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('total_number_of_graduate')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}
