<?php

namespace App\Filament\Resources\KknTimelineItems\Pages;

use App\Filament\Resources\KknTimelineItems\KknTimelineItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKknTimelineItem extends EditRecord
{
    protected static string $resource = KknTimelineItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
