<?php

namespace App\Filament\Admin\Resources\PekerjaanResource\Pages;

use App\Filament\Admin\Resources\PekerjaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPekerjaans extends ListRecords
{
    protected static string $resource = PekerjaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
