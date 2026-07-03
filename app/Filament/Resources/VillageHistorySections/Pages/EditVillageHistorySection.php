<?php

namespace App\Filament\Resources\VillageHistorySections\Pages;

use App\Filament\Resources\VillageHistorySections\VillageHistorySectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVillageHistorySection extends EditRecord
{
    protected static string $resource = VillageHistorySectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
