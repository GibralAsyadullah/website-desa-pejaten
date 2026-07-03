<?php

namespace App\Filament\Resources\KknOutputs\Pages;

use App\Filament\Resources\KknOutputs\KknOutputResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKknOutputs extends ListRecords
{
    protected static string $resource = KknOutputResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
