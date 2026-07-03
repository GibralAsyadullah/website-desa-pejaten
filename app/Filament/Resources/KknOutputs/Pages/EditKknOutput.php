<?php

namespace App\Filament\Resources\KknOutputs\Pages;

use App\Filament\Resources\KknOutputs\KknOutputResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKknOutput extends EditRecord
{
    protected static string $resource = KknOutputResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
