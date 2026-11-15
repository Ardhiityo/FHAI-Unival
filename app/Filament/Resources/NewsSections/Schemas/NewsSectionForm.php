<?php

namespace App\Filament\Resources\NewsSections\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class NewsSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn (Set $set, ?string $state) => $set('slug', Str::slug($state ?? ''))
                    ),
                TextInput::make('slug')
                    ->readOnly()
                    ->unique(
                        table: 'news_sections',
                        column: 'slug',
                        ignoreRecord: true,
                    )
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('date')
                    ->required(),
                FileUpload::make('image_url')
                    ->image()
                    ->required()
                    ->directory('news_sections')
                    ->disk('public')
                    ->visibility('public')
                    ->openable()
                    ->maxSize(1024)
                    ->hint('Image files only. Maximum size: 1MB'),
            ]);
    }
}
