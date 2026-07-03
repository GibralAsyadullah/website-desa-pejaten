<?php

namespace App\Filament\Resources\EnvironmentalTopics\Pages;

use App\Filament\Resources\EnvironmentalTopics\EnvironmentalTopicResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEnvironmentalTopics extends ListRecords
{
    protected static string $resource = EnvironmentalTopicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
