<?php

namespace App\Filament\Resources\VillageBoundaries;

use App\Filament\Resources\VillageBoundaries\Pages\CreateVillageBoundary;
use App\Filament\Resources\VillageBoundaries\Pages\EditVillageBoundary;
use App\Filament\Resources\VillageBoundaries\Pages\ListVillageBoundaries;
use App\Filament\Resources\VillageBoundaries\Schemas\VillageBoundaryForm;
use App\Filament\Resources\VillageBoundaries\Tables\VillageBoundariesTable;
use App\Models\VillageBoundary;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VillageBoundaryResource extends Resource
{
    protected static ?string $model = VillageBoundary::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return VillageBoundaryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VillageBoundariesTable::configure($table);
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
            'index' => ListVillageBoundaries::route('/'),
            'create' => CreateVillageBoundary::route('/create'),
            'edit' => EditVillageBoundary::route('/{record}/edit'),
        ];
    }
}
