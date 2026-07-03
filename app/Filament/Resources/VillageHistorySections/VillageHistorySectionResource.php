<?php

namespace App\Filament\Resources\VillageHistorySections;

use App\Filament\Resources\VillageHistorySections\Pages\CreateVillageHistorySection;
use App\Filament\Resources\VillageHistorySections\Pages\EditVillageHistorySection;
use App\Filament\Resources\VillageHistorySections\Pages\ListVillageHistorySections;
use App\Filament\Resources\VillageHistorySections\Schemas\VillageHistorySectionForm;
use App\Filament\Resources\VillageHistorySections\Tables\VillageHistorySectionsTable;
use App\Models\VillageHistorySection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VillageHistorySectionResource extends Resource
{
    protected static ?string $model = VillageHistorySection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return VillageHistorySectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VillageHistorySectionsTable::configure($table);
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
            'index' => ListVillageHistorySections::route('/'),
            'create' => CreateVillageHistorySection::route('/create'),
            'edit' => EditVillageHistorySection::route('/{record}/edit'),
        ];
    }
}
