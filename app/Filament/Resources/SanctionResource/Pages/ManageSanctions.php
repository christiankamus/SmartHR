<?php

namespace App\Filament\Resources\SanctionResource\Pages;

use App\Filament\Resources\SanctionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSanctions extends ManageRecords
{
    protected static string $resource = SanctionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
