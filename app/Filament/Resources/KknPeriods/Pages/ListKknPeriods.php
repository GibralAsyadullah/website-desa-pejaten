<?php

namespace App\Filament\Resources\KknPeriods\Pages;

use App\Filament\Resources\KknPeriods\KknPeriodResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKknPeriods extends ListRecords
{
    protected static string $resource = KknPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
