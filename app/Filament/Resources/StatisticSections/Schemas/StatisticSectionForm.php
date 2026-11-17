<?php

namespace App\Filament\Resources\StatisticSections\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StatisticSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('total')
                    ->integer()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}
