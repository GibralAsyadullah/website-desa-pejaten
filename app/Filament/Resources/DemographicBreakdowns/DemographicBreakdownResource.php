<?php

namespace App\Filament\Resources\DemographicBreakdowns;

use App\Filament\Resources\DemographicBreakdowns\Pages\CreateDemographicBreakdown;
use App\Filament\Resources\DemographicBreakdowns\Pages\EditDemographicBreakdown;
use App\Filament\Resources\DemographicBreakdowns\Pages\ListDemographicBreakdowns;
use App\Filament\Resources\DemographicBreakdowns\Schemas\DemographicBreakdownForm;
use App\Filament\Resources\DemographicBreakdowns\Tables\DemographicBreakdownsTable;
use App\Models\DemographicBreakdown;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DemographicBreakdownResource extends Resource
{
    protected static ?string $model = DemographicBreakdown::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DemographicBreakdownForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DemographicBreakdownsTable::configure($table);
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
            'index' => ListDemographicBreakdowns::route('/'),
            'create' => CreateDemographicBreakdown::route('/create'),
            'edit' => EditDemographicBreakdown::route('/{record}/edit'),
        ];
    }
}
