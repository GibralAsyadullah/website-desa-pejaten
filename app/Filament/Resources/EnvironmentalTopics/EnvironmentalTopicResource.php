<?php

namespace App\Filament\Resources\EnvironmentalTopics;

use App\Filament\Resources\EnvironmentalTopics\Pages\CreateEnvironmentalTopic;
use App\Filament\Resources\EnvironmentalTopics\Pages\EditEnvironmentalTopic;
use App\Filament\Resources\EnvironmentalTopics\Pages\ListEnvironmentalTopics;
use App\Filament\Resources\EnvironmentalTopics\Schemas\EnvironmentalTopicForm;
use App\Filament\Resources\EnvironmentalTopics\Tables\EnvironmentalTopicsTable;
use App\Models\EnvironmentalTopic;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EnvironmentalTopicResource extends Resource
{
    protected static ?string $model = EnvironmentalTopic::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EnvironmentalTopicForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EnvironmentalTopicsTable::configure($table);
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
            'index' => ListEnvironmentalTopics::route('/'),
            'create' => CreateEnvironmentalTopic::route('/create'),
            'edit' => EditEnvironmentalTopic::route('/{record}/edit'),
        ];
    }
}
