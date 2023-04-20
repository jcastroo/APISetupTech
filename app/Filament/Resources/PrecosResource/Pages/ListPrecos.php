<?php

namespace App\Filament\Resources\PrecosResource\Pages;

use App\Filament\Resources\PrecosResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrecos extends ListRecords
{
    protected static string $resource = PrecosResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
