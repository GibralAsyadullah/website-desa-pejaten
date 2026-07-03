<?php

namespace App\Filament\Resources\KknTimelines\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KknTimelineForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kkn_period_id')
                    ->required()
                    ->numeric(),
                TextInput::make('label')
                    ->required(),
                TextInput::make('judul')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('berjalan'),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
