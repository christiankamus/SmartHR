<?php

namespace App\Filament\Resources\SocietyResource\Pages;

use App\Filament\Resources\SocietyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSocieties extends ManageRecords
{
    protected static string $resource = SocietyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
