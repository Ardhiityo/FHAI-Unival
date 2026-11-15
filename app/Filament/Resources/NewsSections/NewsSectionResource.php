<?php

namespace App\Filament\Resources\NewsSections;

use App\Filament\Resources\NewsSections\Pages\CreateNewsSection;
use App\Filament\Resources\NewsSections\Pages\EditNewsSection;
use App\Filament\Resources\NewsSections\Pages\ListNewsSections;
use App\Filament\Resources\NewsSections\Pages\ViewNewsSection;
use App\Filament\Resources\NewsSections\Schemas\NewsSectionForm;
use App\Filament\Resources\NewsSections\Schemas\NewsSectionInfolist;
use App\Filament\Resources\NewsSections\Tables\NewsSectionsTable;
use App\Models\NewsSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NewsSectionResource extends Resource
{
    protected static ?string $model = NewsSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Newspaper;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return NewsSectionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return NewsSectionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NewsSectionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNewsSections::route('/'),
            'create' => CreateNewsSection::route('/create'),
            'view' => ViewNewsSection::route('/{record}'),
            'edit' => EditNewsSection::route('/{record}/edit'),
        ];
    }
}
