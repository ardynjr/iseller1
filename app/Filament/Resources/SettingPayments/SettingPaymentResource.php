<?php

namespace App\Filament\Resources\SettingPayments;

use App\Filament\Resources\SettingPayments\Pages\CreateSettingPayment;
use App\Filament\Resources\SettingPayments\Pages\EditSettingPayment;
use App\Filament\Resources\SettingPayments\Pages\ListSettingPayments;
use App\Filament\Resources\SettingPayments\Pages\ViewSettingPayment;
use App\Filament\Resources\SettingPayments\Schemas\SettingPaymentForm;
use App\Filament\Resources\SettingPayments\Schemas\SettingPaymentInfolist;
use App\Filament\Resources\SettingPayments\Tables\SettingPaymentsTable;
use App\Models\SettingPayment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SettingPaymentResource extends Resource
{
    protected static ?string $model = SettingPayment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCreditCard;

    protected static ?string $recordTitleAttribute = 'SettingPayment';

    public static function form(Schema $schema): Schema
    {
        return SettingPaymentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SettingPaymentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SettingPaymentsTable::configure($table);
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
            'index' => ListSettingPayments::route('/'),
            'create' => CreateSettingPayment::route('/create'),
            'view' => ViewSettingPayment::route('/{record}'),
            'edit' => EditSettingPayment::route('/{record}/edit'),
        ];
    }
}
