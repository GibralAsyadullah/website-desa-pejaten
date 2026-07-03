<?php

namespace App\Filament\Resources\KknIndividualPrograms\Pages;

use App\Filament\Resources\KknIndividualPrograms\KknIndividualProgramResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKknIndividualPrograms extends ListRecords
{
    protected static string $resource = KknIndividualProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
