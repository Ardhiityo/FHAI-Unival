<?php

namespace App\Filament\Resources\StudyProgramSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudyProgramSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('image_url')
                    ->image()
                    ->required()
                    ->directory('study_programs')
                    ->disk('public')
                    ->visibility('public')
                    ->openable()
                    ->maxSize(1024)
                    ->openable()
                    ->hint('Image files only. Maximum size: 1MB'),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('detail_url')
                    ->url()
                    ->required(),
            ]);
    }
}
