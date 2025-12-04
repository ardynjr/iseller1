<?php

namespace App\Filament\Resources\SettingProducts\Pages;

use App\Filament\Resources\SettingProducts\SettingProductResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSettingProduct extends ViewRecord
{
    protected static string $resource = SettingProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
