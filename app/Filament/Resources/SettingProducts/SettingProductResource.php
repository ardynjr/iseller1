<?php

namespace App\Filament\Resources\SettingProducts;

use App\Filament\Resources\SettingProducts\Pages\CreateSettingProduct;
use App\Filament\Resources\SettingProducts\Pages\EditSettingProduct;
use App\Filament\Resources\SettingProducts\Pages\ListSettingProducts;
use App\Filament\Resources\SettingProducts\Pages\ViewSettingProduct;
use App\Filament\Resources\SettingProducts\Schemas\SettingProductForm;
use App\Filament\Resources\SettingProducts\Schemas\SettingProductInfolist;
use App\Filament\Resources\SettingProducts\Tables\SettingProductsTable;
use App\Models\SettingProduct;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SettingProductResource extends Resource
{
    protected static ?string $model = SettingProduct::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShoppingCart;

    protected static ?string $recordTitleAttribute = 'SettingProduct';

    public static function form(Schema $schema): Schema
    {
        return SettingProductForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SettingProductInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SettingProductsTable::configure($table);
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
            'index' => ListSettingProducts::route('/'),
            'create' => CreateSettingProduct::route('/create'),
            'view' => ViewSettingProduct::route('/{record}'),
            'edit' => EditSettingProduct::route('/{record}/edit'),
        ];
    }
}
