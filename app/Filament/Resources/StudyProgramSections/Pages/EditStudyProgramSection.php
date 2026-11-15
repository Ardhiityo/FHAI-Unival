<?php

namespace App\Filament\Resources\StudyProgramSections\Pages;

use App\Filament\Resources\StudyProgramSections\StudyProgramSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStudyProgramSection extends EditRecord
{
    protected static string $resource = StudyProgramSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
