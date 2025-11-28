<?php

namespace App\Filament\Resources\SettingDiskons\Pages;

use App\Filament\Resources\SettingDiskons\SettingDiskonResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSettingDiskon extends ViewRecord
{
    protected static string $resource = SettingDiskonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
