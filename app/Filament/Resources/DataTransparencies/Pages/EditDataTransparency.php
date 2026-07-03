<?php

namespace App\Filament\Resources\DataTransparencies\Pages;

use App\Filament\Resources\DataTransparencies\DataTransparencyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDataTransparency extends EditRecord
{
    protected static string $resource = DataTransparencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
