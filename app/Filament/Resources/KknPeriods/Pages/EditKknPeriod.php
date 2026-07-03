<?php

namespace App\Filament\Resources\KknPeriods\Pages;

use App\Filament\Resources\KknPeriods\KknPeriodResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKknPeriod extends EditRecord
{
    protected static string $resource = KknPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
