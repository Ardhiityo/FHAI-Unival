<?php

namespace App\Filament\Resources\NewsSections\Pages;

use App\Filament\Resources\NewsSections\NewsSectionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsSection extends CreateRecord
{
    protected static string $resource = NewsSectionResource::class;
}
