<?php

namespace App\Filament\Resources\Umkms\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UmkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('kategori'),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                TextInput::make('pemilik'),
                TextInput::make('kontak'),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
