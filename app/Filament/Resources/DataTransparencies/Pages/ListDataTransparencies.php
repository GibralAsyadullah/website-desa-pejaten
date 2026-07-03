<?php

namespace App\Filament\Resources\DataTransparencies\Pages;

use App\Filament\Resources\DataTransparencies\DataTransparencyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDataTransparencies extends ListRecords
{
    protected static string $resource = DataTransparencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
