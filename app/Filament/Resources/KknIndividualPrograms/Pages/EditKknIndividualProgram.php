<?php

namespace App\Filament\Resources\KknIndividualPrograms\Pages;

use App\Filament\Resources\KknIndividualPrograms\KknIndividualProgramResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKknIndividualProgram extends EditRecord
{
    protected static string $resource = KknIndividualProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
