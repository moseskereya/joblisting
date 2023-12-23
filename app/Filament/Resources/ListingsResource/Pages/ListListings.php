<?php

namespace App\Filament\Resources\ListingsResource\Pages;

use App\Filament\Resources\ListingsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListings extends ListRecords
{
    protected static string $resource = ListingsResource::class;
    protected int | string | array $columnSpan = 'full';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
