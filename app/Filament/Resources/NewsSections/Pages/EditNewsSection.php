<?php

namespace App\Filament\Resources\NewsSections\Pages;

use App\Filament\Resources\NewsSections\NewsSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditNewsSection extends EditRecord
{
    protected static string $resource = NewsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
