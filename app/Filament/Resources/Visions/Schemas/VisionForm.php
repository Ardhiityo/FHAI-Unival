<?php

namespace App\Filament\Resources\Visions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VisionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('vision')
                    ->required(),
            ]);
    }
}
