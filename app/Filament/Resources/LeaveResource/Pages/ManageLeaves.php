<?php

namespace App\Filament\Resources\LeaveResource\Pages;

use App\Filament\Resources\LeaveResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLeaves extends ManageRecords
{
    protected static string $resource = LeaveResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
