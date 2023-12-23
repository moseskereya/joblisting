<?php

namespace App\Filament\Resources\ListingsResource\Pages;

use App\Filament\Resources\ListingsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditListings extends EditRecord
{
    protected static string $resource = ListingsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
