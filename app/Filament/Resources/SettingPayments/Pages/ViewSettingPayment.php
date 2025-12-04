<?php

namespace App\Filament\Resources\SettingPayments\Pages;

use App\Filament\Resources\SettingPayments\SettingPaymentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSettingPayment extends ViewRecord
{
    protected static string $resource = SettingPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
