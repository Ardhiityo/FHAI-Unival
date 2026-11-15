<?php

namespace App\Filament\Resources\StatisticSections\Pages;

use App\Filament\Resources\StatisticSections\StatisticSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStatisticSection extends EditRecord
{
    protected static string $resource = StatisticSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
