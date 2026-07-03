<?php

namespace App\Filament\Resources\KknMembers\Pages;

use App\Filament\Resources\KknMembers\KknMemberResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKknMembers extends ListRecords
{
    protected static string $resource = KknMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
