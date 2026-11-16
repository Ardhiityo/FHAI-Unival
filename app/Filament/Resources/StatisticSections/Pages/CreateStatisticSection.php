<?php

namespace App\Filament\Resources\StatisticSections\Pages;

use App\Filament\Resources\StatisticSections\StatisticSectionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStatisticSection extends CreateRecord
{
    protected static string $resource = StatisticSectionResource::class;

    protected static bool $canCreateAnother = false;
}
