<?php

namespace App\Filament\Resources\VillageBoundaries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VillageBoundaryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('arah')
                    ->required(),
                TextInput::make('keterangan')
                    ->required(),
            ]);
    }
}
