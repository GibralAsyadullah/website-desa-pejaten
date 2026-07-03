<?php

namespace App\Filament\Resources\EnvironmentalFaqs\Pages;

use App\Filament\Resources\EnvironmentalFaqs\EnvironmentalFaqResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEnvironmentalFaq extends EditRecord
{
    protected static string $resource = EnvironmentalFaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
