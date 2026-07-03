<?php

namespace App\Filament\Resources\VillageBoundaries\Pages;

use App\Filament\Resources\VillageBoundaries\VillageBoundaryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVillageBoundaries extends ListRecords
{
    protected static string $resource = VillageBoundaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
