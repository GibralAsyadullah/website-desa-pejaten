<?php

namespace App\Filament\Resources\KknOutputs;

use App\Filament\Resources\KknOutputs\Pages\CreateKknOutput;
use App\Filament\Resources\KknOutputs\Pages\EditKknOutput;
use App\Filament\Resources\KknOutputs\Pages\ListKknOutputs;
use App\Filament\Resources\KknOutputs\Schemas\KknOutputForm;
use App\Filament\Resources\KknOutputs\Tables\KknOutputsTable;
use App\Models\KknOutput;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KknOutputResource extends Resource
{
    protected static ?string $model = KknOutput::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return KknOutputForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KknOutputsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKknOutputs::route('/'),
            'create' => CreateKknOutput::route('/create'),
            'edit' => EditKknOutput::route('/{record}/edit'),
        ];
    }
}
