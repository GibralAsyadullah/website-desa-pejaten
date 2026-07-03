<?php

namespace App\Filament\Resources\EnvironmentalFaqs\Pages;

use App\Filament\Resources\EnvironmentalFaqs\EnvironmentalFaqResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEnvironmentalFaqs extends ListRecords
{
    protected static string $resource = EnvironmentalFaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
