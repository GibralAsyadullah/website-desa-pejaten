<?php

namespace App\Filament\Resources\OrganizationNodes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrganizationNodeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('jabatan')
                    ->required(),
                TextInput::make('nama_pejabat'),
                TextInput::make('parent_id')
                    ->numeric(),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
