<?php

namespace App\Filament\Resources\SettingPayments\Pages;

use App\Filament\Resources\SettingPayments\SettingPaymentResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSettingPayment extends EditRecord
{
    protected static string $resource = SettingPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
