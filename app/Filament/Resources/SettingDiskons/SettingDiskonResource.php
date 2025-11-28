<?php

namespace App\Filament\Resources\SettingDiskons;

use App\Filament\Resources\SettingDiskons\Pages\CreateSettingDiskon;
use App\Filament\Resources\SettingDiskons\Pages\EditSettingDiskon;
use App\Filament\Resources\SettingDiskons\Pages\ListSettingDiskons;
use App\Filament\Resources\SettingDiskons\Pages\ViewSettingDiskon;
use App\Filament\Resources\SettingDiskons\Schemas\SettingDiskonForm;
use App\Filament\Resources\SettingDiskons\Schemas\SettingDiskonInfolist;
use App\Filament\Resources\SettingDiskons\Tables\SettingDiskonsTable;
use App\Models\SettingDiskon;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SettingDiskonResource extends Resource
{
    protected static ?string $model = SettingDiskon::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCurrencyEuro;

    protected static ?string $recordTitleAttribute = 'SettingDiskon';

    public static function form(Schema $schema): Schema
    {
        return SettingDiskonForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SettingDiskonInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SettingDiskonsTable::configure($table);
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
            'index' => ListSettingDiskons::route('/'),
            'create' => CreateSettingDiskon::route('/create'),
            'view' => ViewSettingDiskon::route('/{record}'),
            'edit' => EditSettingDiskon::route('/{record}/edit'),
        ];
    }
}
