<?php

namespace App\Filament\Resources\KknIndividualPrograms\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KknIndividualProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kkn_period_id')
                    ->required()
                    ->numeric(),
                TextInput::make('study_program_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nama_mahasiswa')
                    ->required(),
                TextInput::make('judul')
                    ->required(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
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
