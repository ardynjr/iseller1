<?php

namespace App\Filament\Resources\SettingDiskons\Pages;

use App\Filament\Resources\SettingDiskons\SettingDiskonResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSettingDiskons extends ListRecords
{
    protected static string $resource = SettingDiskonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
