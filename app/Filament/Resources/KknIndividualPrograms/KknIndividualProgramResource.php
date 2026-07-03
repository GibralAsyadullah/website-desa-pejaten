<?php

namespace App\Filament\Resources\KknIndividualPrograms;

use App\Filament\Resources\KknIndividualPrograms\Pages\CreateKknIndividualProgram;
use App\Filament\Resources\KknIndividualPrograms\Pages\EditKknIndividualProgram;
use App\Filament\Resources\KknIndividualPrograms\Pages\ListKknIndividualPrograms;
use App\Filament\Resources\KknIndividualPrograms\Schemas\KknIndividualProgramForm;
use App\Filament\Resources\KknIndividualPrograms\Tables\KknIndividualProgramsTable;
use App\Models\KknIndividualProgram;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KknIndividualProgramResource extends Resource
{
    protected static ?string $model = KknIndividualProgram::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return KknIndividualProgramForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KknIndividualProgramsTable::configure($table);
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
            'index' => ListKknIndividualPrograms::route('/'),
            'create' => CreateKknIndividualProgram::route('/create'),
            'edit' => EditKknIndividualProgram::route('/{record}/edit'),
        ];
    }
}
