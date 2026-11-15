<?php

namespace App\Filament\Resources\NewsSections\Pages;

use App\Filament\Resources\NewsSections\NewsSectionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNewsSection extends ViewRecord
{
    protected static string $resource = NewsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
