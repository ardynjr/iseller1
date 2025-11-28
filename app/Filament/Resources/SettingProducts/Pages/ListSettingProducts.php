<?php

namespace App\Filament\Resources\SettingProducts\Pages;

use App\Filament\Resources\SettingProducts\SettingProductResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSettingProducts extends ListRecords
{
    protected static string $resource = SettingProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
