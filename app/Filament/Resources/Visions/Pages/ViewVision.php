<?php

namespace App\Filament\Resources\Visions\Pages;

use App\Filament\Resources\Visions\VisionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVision extends ViewRecord
{
    protected static string $resource = VisionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
