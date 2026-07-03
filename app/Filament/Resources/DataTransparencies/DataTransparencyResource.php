<?php

namespace App\Filament\Resources\DataTransparencies;

use App\Filament\Resources\DataTransparencies\Pages\CreateDataTransparency;
use App\Filament\Resources\DataTransparencies\Pages\EditDataTransparency;
use App\Filament\Resources\DataTransparencies\Pages\ListDataTransparencies;
use App\Filament\Resources\DataTransparencies\Schemas\DataTransparencyForm;
use App\Filament\Resources\DataTransparencies\Tables\DataTransparenciesTable;
use App\Models\DataTransparency;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DataTransparencyResource extends Resource
{
    protected static ?string $model = DataTransparency::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DataTransparencyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DataTransparenciesTable::configure($table);
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
            'index' => ListDataTransparencies::route('/'),
            'create' => CreateDataTransparency::route('/create'),
            'edit' => EditDataTransparency::route('/{record}/edit'),
        ];
    }
}
