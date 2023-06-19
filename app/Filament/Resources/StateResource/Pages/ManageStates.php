<?php

namespace App\Filament\Resources\StateResource\Pages;

use App\Filament\Resources\StateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageStates extends ManageRecords
{
    protected static string $resource = StateResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
