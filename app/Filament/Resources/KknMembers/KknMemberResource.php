<?php

namespace App\Filament\Resources\KknMembers;

use App\Filament\Resources\KknMembers\Pages\CreateKknMember;
use App\Filament\Resources\KknMembers\Pages\EditKknMember;
use App\Filament\Resources\KknMembers\Pages\ListKknMembers;
use App\Filament\Resources\KknMembers\Schemas\KknMemberForm;
use App\Filament\Resources\KknMembers\Tables\KknMembersTable;
use App\Models\KknMember;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KknMemberResource extends Resource
{
    protected static ?string $model = KknMember::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return KknMemberForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KknMembersTable::configure($table);
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
            'index' => ListKknMembers::route('/'),
            'create' => CreateKknMember::route('/create'),
            'edit' => EditKknMember::route('/{record}/edit'),
        ];
    }
}
