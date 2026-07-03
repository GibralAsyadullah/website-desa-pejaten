<?php

namespace App\Filament\Resources\Visions\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VisionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('konten')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
