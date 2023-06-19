<?php

namespace App\Filament\Resources\EducationLevelResource\Pages;

use App\Filament\Resources\EducationLevelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEducationLevels extends ManageRecords
{
    protected static string $resource = EducationLevelResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
