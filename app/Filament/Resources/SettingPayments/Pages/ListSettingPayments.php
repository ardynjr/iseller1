<?php

namespace App\Filament\Resources\SettingPayments\Pages;

use App\Filament\Resources\SettingPayments\SettingPaymentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSettingPayments extends ListRecords
{
    protected static string $resource = SettingPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
