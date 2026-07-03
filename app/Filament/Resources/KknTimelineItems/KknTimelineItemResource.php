<?php

namespace App\Filament\Resources\KknTimelineItems;

use App\Filament\Resources\KknTimelineItems\Pages\CreateKknTimelineItem;
use App\Filament\Resources\KknTimelineItems\Pages\EditKknTimelineItem;
use App\Filament\Resources\KknTimelineItems\Pages\ListKknTimelineItems;
use App\Filament\Resources\KknTimelineItems\Schemas\KknTimelineItemForm;
use App\Filament\Resources\KknTimelineItems\Tables\KknTimelineItemsTable;
use App\Models\KknTimelineItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KknTimelineItemResource extends Resource
{
    protected static ?string $model = KknTimelineItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return KknTimelineItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KknTimelineItemsTable::configure($table);
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
            'index' => ListKknTimelineItems::route('/'),
            'create' => CreateKknTimelineItem::route('/create'),
            'edit' => EditKknTimelineItem::route('/{record}/edit'),
        ];
    }
}
