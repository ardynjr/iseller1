<?php

namespace App\Filament\Resources\SettingProducts\Pages;

use App\Filament\Resources\SettingProducts\SettingProductResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSettingProduct extends EditRecord
{
    protected static string $resource = SettingProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
