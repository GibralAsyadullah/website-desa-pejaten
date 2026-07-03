<?php

namespace App\Filament\Resources\KknTimelines;

use App\Filament\Resources\KknTimelines\Pages\CreateKknTimeline;
use App\Filament\Resources\KknTimelines\Pages\EditKknTimeline;
use App\Filament\Resources\KknTimelines\Pages\ListKknTimelines;
use App\Filament\Resources\KknTimelines\Schemas\KknTimelineForm;
use App\Filament\Resources\KknTimelines\Tables\KknTimelinesTable;
use App\Models\KknTimeline;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KknTimelineResource extends Resource
{
    protected static ?string $model = KknTimeline::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return KknTimelineForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KknTimelinesTable::configure($table);
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
            'index' => ListKknTimelines::route('/'),
            'create' => CreateKknTimeline::route('/create'),
            'edit' => EditKknTimeline::route('/{record}/edit'),
        ];
    }
}
