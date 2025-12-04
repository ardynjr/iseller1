<?php

namespace App\Filament\Resources\SettingDiskons\Pages;

use App\Filament\Resources\SettingDiskons\SettingDiskonResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSettingDiskon extends EditRecord
{
    protected static string $resource = SettingDiskonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
