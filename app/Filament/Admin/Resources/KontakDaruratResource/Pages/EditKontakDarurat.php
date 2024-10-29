<?php

namespace App\Filament\Admin\Resources\KontakDaruratResource\Pages;

use App\Filament\Admin\Resources\KontakDaruratResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKontakDarurat extends EditRecord
{
    protected static string $resource = KontakDaruratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
