<?php

namespace App\Filament\Resources\FonctionResource\Pages;

use App\Filament\Resources\FonctionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFonctions extends ManageRecords
{
    protected static string $resource = FonctionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
