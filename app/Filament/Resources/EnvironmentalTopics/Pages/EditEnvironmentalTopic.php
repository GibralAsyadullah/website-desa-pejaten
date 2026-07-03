<?php

namespace App\Filament\Resources\EnvironmentalTopics\Pages;

use App\Filament\Resources\EnvironmentalTopics\EnvironmentalTopicResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEnvironmentalTopic extends EditRecord
{
    protected static string $resource = EnvironmentalTopicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
