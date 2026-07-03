<?php

namespace App\Filament\Resources\KknTimelineItems\Pages;

use App\Filament\Resources\KknTimelineItems\KknTimelineItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKknTimelineItems extends ListRecords
{
    protected static string $resource = KknTimelineItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
