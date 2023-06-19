<?php

namespace App\Filament\Resources\DisciplineResource\Pages;

use App\Filament\Resources\DisciplineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDisciplines extends ManageRecords
{
    protected static string $resource = DisciplineResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
