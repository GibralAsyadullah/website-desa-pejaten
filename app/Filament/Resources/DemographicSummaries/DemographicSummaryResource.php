<?php

namespace App\Filament\Resources\DemographicSummaries;

use App\Filament\Resources\DemographicSummaries\Pages\CreateDemographicSummary;
use App\Filament\Resources\DemographicSummaries\Pages\EditDemographicSummary;
use App\Filament\Resources\DemographicSummaries\Pages\ListDemographicSummaries;
use App\Filament\Resources\DemographicSummaries\Schemas\DemographicSummaryForm;
use App\Filament\Resources\DemographicSummaries\Tables\DemographicSummariesTable;
use App\Models\DemographicSummary;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DemographicSummaryResource extends Resource
{
    protected static ?string $model = DemographicSummary::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DemographicSummaryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DemographicSummariesTable::configure($table);
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
            'index' => ListDemographicSummaries::route('/'),
            'create' => CreateDemographicSummary::route('/create'),
            'edit' => EditDemographicSummary::route('/{record}/edit'),
        ];
    }
}
