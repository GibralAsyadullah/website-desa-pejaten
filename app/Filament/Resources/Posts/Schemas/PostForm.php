<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kkn_period_id')
                    ->numeric(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('judul')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('ringkasan')
                    ->columnSpanFull(),
                Textarea::make('konten')
                    ->columnSpanFull(),
                DatePicker::make('tanggal_publish'),
                TextInput::make('status')
                    ->required()
                    ->default('draft'),
            ]);
    }
}
