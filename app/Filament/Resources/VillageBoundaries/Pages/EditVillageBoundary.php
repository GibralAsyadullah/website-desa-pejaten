<?php

namespace App\Filament\Resources\VillageBoundaries\Pages;

use App\Filament\Resources\VillageBoundaries\VillageBoundaryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVillageBoundary extends EditRecord
{
    protected static string $resource = VillageBoundaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
