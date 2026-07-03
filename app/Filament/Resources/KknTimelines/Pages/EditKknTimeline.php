<?php

namespace App\Filament\Resources\KknTimelines\Pages;

use App\Filament\Resources\KknTimelines\KknTimelineResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKknTimeline extends EditRecord
{
    protected static string $resource = KknTimelineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
