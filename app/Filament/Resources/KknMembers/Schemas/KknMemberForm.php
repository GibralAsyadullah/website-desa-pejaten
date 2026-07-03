<?php

namespace App\Filament\Resources\KknMembers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KknMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kkn_period_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nama')
                    ->required(),
                TextInput::make('peran')
                    ->required(),
                TextInput::make('prodi'),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
