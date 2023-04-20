<?php

namespace App\Filament\Resources\PrecosResource\Pages;

use App\Filament\Resources\PrecosResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrecos extends EditRecord
{
    protected static string $resource = PrecosResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
