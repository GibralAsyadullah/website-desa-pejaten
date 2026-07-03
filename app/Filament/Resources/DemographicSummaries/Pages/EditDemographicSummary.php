<?php

namespace App\Filament\Resources\DemographicSummaries\Pages;

use App\Filament\Resources\DemographicSummaries\DemographicSummaryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDemographicSummary extends EditRecord
{
    protected static string $resource = DemographicSummaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
