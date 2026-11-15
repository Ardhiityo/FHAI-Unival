<?php

namespace App\Filament\Resources\Missions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('mission')
                    ->required(),
            ]);
    }
}
