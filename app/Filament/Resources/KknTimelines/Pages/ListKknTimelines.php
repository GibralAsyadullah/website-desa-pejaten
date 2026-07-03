<?php

namespace App\Filament\Resources\KknTimelines\Pages;

use App\Filament\Resources\KknTimelines\KknTimelineResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKknTimelines extends ListRecords
{
    protected static string $resource = KknTimelineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
