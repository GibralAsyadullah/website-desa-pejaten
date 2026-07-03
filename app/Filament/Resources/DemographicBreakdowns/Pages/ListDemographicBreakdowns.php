<?php

namespace App\Filament\Resources\DemographicBreakdowns\Pages;

use App\Filament\Resources\DemographicBreakdowns\DemographicBreakdownResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDemographicBreakdowns extends ListRecords
{
    protected static string $resource = DemographicBreakdownResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
