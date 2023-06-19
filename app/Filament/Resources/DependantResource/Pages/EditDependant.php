<?php

namespace App\Filament\Resources\DependantResource\Pages;

use App\Filament\Resources\DependantResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDependant extends EditRecord
{
    protected static string $resource = DependantResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
