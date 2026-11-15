<?php

namespace App\Filament\Resources\StudyProgramSections\Pages;

use App\Filament\Resources\StudyProgramSections\StudyProgramSectionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStudyProgramSection extends ViewRecord
{
    protected static string $resource = StudyProgramSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
