<?php

namespace App\Filament\Resources\KknPeriods\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class KknPeriodForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('tahun')
                    ->required()
                    ->numeric(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                DatePicker::make('tanggal_mulai'),
                DatePicker::make('tanggal_selesai'),
                TextInput::make('jumlah_mahasiswa')
                    ->numeric(),
                TextInput::make('jumlah_prodi')
                    ->numeric(),
                TextInput::make('jumlah_minggu')
                    ->numeric(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
