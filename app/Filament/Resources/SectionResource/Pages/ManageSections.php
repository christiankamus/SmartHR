<?php

namespace App\Filament\Resources\SectionResource\Pages;

use App\Filament\Resources\SectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSections extends ManageRecords
{
    protected static string $resource = SectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
