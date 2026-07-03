<?php

namespace App\Filament\Resources\EnvironmentalFaqs;

use App\Filament\Resources\EnvironmentalFaqs\Pages\CreateEnvironmentalFaq;
use App\Filament\Resources\EnvironmentalFaqs\Pages\EditEnvironmentalFaq;
use App\Filament\Resources\EnvironmentalFaqs\Pages\ListEnvironmentalFaqs;
use App\Filament\Resources\EnvironmentalFaqs\Schemas\EnvironmentalFaqForm;
use App\Filament\Resources\EnvironmentalFaqs\Tables\EnvironmentalFaqsTable;
use App\Models\EnvironmentalFaq;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EnvironmentalFaqResource extends Resource
{
    protected static ?string $model = EnvironmentalFaq::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EnvironmentalFaqForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EnvironmentalFaqsTable::configure($table);
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
            'index' => ListEnvironmentalFaqs::route('/'),
            'create' => CreateEnvironmentalFaq::route('/create'),
            'edit' => EditEnvironmentalFaq::route('/{record}/edit'),
        ];
    }
}
