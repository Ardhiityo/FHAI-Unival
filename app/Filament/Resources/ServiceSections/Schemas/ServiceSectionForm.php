<?php

namespace App\Filament\Resources\ServiceSections\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ServiceSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->columnSpanFull()
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull()
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('url')
                    ->columnSpanFull()
                    ->url()
                    ->required(),
            ]);
    }
}
