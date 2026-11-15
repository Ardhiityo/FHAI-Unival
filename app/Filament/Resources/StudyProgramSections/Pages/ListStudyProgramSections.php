<?php

namespace App\Filament\Resources\StudyProgramSections\Pages;

use App\Filament\Resources\StudyProgramSections\StudyProgramSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudyProgramSections extends ListRecords
{
    protected static string $resource = StudyProgramSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
