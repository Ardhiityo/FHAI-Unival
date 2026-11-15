<?php

namespace App\Filament\Resources\StatisticSections\Pages;

use App\Filament\Resources\StatisticSections\StatisticSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStatisticSections extends ListRecords
{
    protected static string $resource = StatisticSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
