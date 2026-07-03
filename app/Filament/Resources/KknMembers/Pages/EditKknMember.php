<?php

namespace App\Filament\Resources\KknMembers\Pages;

use App\Filament\Resources\KknMembers\KknMemberResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKknMember extends EditRecord
{
    protected static string $resource = KknMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
