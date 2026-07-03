<?php

namespace App\Filament\Resources\KknPeriods;

use App\Filament\Resources\KknPeriods\Pages\CreateKknPeriod;
use App\Filament\Resources\KknPeriods\Pages\EditKknPeriod;
use App\Filament\Resources\KknPeriods\Pages\ListKknPeriods;
use App\Filament\Resources\KknPeriods\Schemas\KknPeriodForm;
use App\Filament\Resources\KknPeriods\Tables\KknPeriodsTable;
use App\Models\KknPeriod;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KknPeriodResource extends Resource
{
    protected static ?string $model = KknPeriod::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return KknPeriodForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KknPeriodsTable::configure($table);
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
            'index' => ListKknPeriods::route('/'),
            'create' => CreateKknPeriod::route('/create'),
            'edit' => EditKknPeriod::route('/{record}/edit'),
        ];
    }
}
