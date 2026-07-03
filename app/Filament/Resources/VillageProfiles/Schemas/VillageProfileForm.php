<?php

namespace App\Filament\Resources\VillageProfiles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VillageProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_desa')
                    ->required(),
                TextInput::make('kecamatan')
                    ->required(),
                TextInput::make('kabupaten')
                    ->required(),
                TextInput::make('provinsi')
                    ->required(),
                TextInput::make('kode_pos')
                    ->required(),
                TextInput::make('alamat_kantor'),
                TextInput::make('telepon')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('jam_pelayanan'),
                TextInput::make('sosial_media'),
                Textarea::make('embed_maps')
                    ->columnSpanFull(),
                Textarea::make('sambutan_kepala_desa')
                    ->columnSpanFull(),
                TextInput::make('luas_wilayah'),
                TextInput::make('ketinggian'),
                TextInput::make('jumlah_rw'),
                TextInput::make('jumlah_rt'),
            ]);
    }
}
