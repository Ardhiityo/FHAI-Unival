<?php

namespace App\Filament\Resources\NewsSections\Pages;

use App\Filament\Resources\NewsSections\NewsSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNewsSections extends ListRecords
{
    protected static string $resource = NewsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
