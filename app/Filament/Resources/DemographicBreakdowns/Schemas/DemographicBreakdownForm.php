<?php

namespace App\Filament\Resources\DemographicBreakdowns\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DemographicBreakdownForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kategori')
                    ->required(),
                TextInput::make('label')
                    ->required(),
                TextInput::make('persentase')
                    ->required()
                    ->numeric(),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
