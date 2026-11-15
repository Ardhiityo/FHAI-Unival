<?php

namespace App\Filament\Resources\StatisticSections\Pages;

use App\Filament\Resources\StatisticSections\StatisticSectionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStatisticSection extends ViewRecord
{
    protected static string $resource = StatisticSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
