<?php

namespace App\Filament\Resources\DemographicBreakdowns\Pages;

use App\Filament\Resources\DemographicBreakdowns\DemographicBreakdownResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDemographicBreakdown extends EditRecord
{
    protected static string $resource = DemographicBreakdownResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
