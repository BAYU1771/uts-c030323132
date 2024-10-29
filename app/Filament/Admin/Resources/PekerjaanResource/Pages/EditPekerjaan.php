<?php

namespace App\Filament\Admin\Resources\PekerjaanResource\Pages;

use App\Filament\Admin\Resources\PekerjaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPekerjaan extends EditRecord
{
    protected static string $resource = PekerjaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
