<?php

namespace App\Filament\Resources\Dusuns\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DusunForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
