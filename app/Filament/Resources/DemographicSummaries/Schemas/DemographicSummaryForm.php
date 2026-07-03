<?php

namespace App\Filament\Resources\DemographicSummaries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DemographicSummaryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tahun')
                    ->required()
                    ->numeric(),
                TextInput::make('total_penduduk')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('laki_laki')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('perempuan')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('kepala_keluarga')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
