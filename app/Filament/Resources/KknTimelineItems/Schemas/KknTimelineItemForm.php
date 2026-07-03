<?php

namespace App\Filament\Resources\KknTimelineItems\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KknTimelineItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kkn_timeline_id')
                    ->required()
                    ->numeric(),
                TextInput::make('keterangan')
                    ->required(),
            ]);
    }
}
