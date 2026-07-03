<?php

namespace App\Filament\Resources\DemographicSummaries\Pages;

use App\Filament\Resources\DemographicSummaries\DemographicSummaryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDemographicSummaries extends ListRecords
{
    protected static string $resource = DemographicSummaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
