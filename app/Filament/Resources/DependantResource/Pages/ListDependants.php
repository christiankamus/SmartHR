<?php

namespace App\Filament\Resources\DependantResource\Pages;

use App\Filament\Resources\DependantResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDependants extends ListRecords
{
    protected static string $resource = DependantResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
