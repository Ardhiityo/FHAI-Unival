<?php

namespace App\Filament\Resources\StatisticSections;

use App\Filament\Resources\StatisticSections\Pages\CreateStatisticSection;
use App\Filament\Resources\StatisticSections\Pages\EditStatisticSection;
use App\Filament\Resources\StatisticSections\Pages\ListStatisticSections;
use App\Filament\Resources\StatisticSections\Pages\ViewStatisticSection;
use App\Filament\Resources\StatisticSections\Schemas\StatisticSectionForm;
use App\Filament\Resources\StatisticSections\Schemas\StatisticSectionInfolist;
use App\Filament\Resources\StatisticSections\Tables\StatisticSectionsTable;
use App\Models\StatisticSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StatisticSectionResource extends Resource
{
    protected static ?string $model = StatisticSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ChartBar;

    protected static ?string $recordTitleAttribute = 'description';

    public static function form(Schema $schema): Schema
    {
        return StatisticSectionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StatisticSectionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StatisticSectionsTable::configure($table);
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
            'index' => ListStatisticSections::route('/'),
            'create' => CreateStatisticSection::route('/create'),
            'view' => ViewStatisticSection::route('/{record}'),
            'edit' => EditStatisticSection::route('/{record}/edit'),
        ];
    }
}
