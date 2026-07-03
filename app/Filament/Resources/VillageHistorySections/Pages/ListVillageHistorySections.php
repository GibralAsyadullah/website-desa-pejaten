<?php

namespace App\Filament\Resources\VillageHistorySections\Pages;

use App\Filament\Resources\VillageHistorySections\VillageHistorySectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVillageHistorySections extends ListRecords
{
    protected static string $resource = VillageHistorySectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
