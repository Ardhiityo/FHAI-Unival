<?php

namespace App\Filament\Resources\StudyProgramSections;

use App\Filament\Resources\StudyProgramSections\Pages\CreateStudyProgramSection;
use App\Filament\Resources\StudyProgramSections\Pages\EditStudyProgramSection;
use App\Filament\Resources\StudyProgramSections\Pages\ListStudyProgramSections;
use App\Filament\Resources\StudyProgramSections\Pages\ViewStudyProgramSection;
use App\Filament\Resources\StudyProgramSections\Schemas\StudyProgramSectionForm;
use App\Filament\Resources\StudyProgramSections\Schemas\StudyProgramSectionInfolist;
use App\Filament\Resources\StudyProgramSections\Tables\StudyProgramSectionsTable;
use App\Models\StudyProgramSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StudyProgramSectionResource extends Resource
{
    protected static ?string $model = StudyProgramSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return StudyProgramSectionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StudyProgramSectionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudyProgramSectionsTable::configure($table);
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
            'index' => ListStudyProgramSections::route('/'),
            'create' => CreateStudyProgramSection::route('/create'),
            'view' => ViewStudyProgramSection::route('/{record}'),
            'edit' => EditStudyProgramSection::route('/{record}/edit'),
        ];
    }
}
