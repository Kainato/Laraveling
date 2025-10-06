<?php

namespace App\Filament\Resources\CharResource\Pages;

use App\Filament\Resources\CharResource;
use App\Filament\Resources\ClassesResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Actions;

class ViewChar extends ViewRecord
{
    protected static string $resource = CharResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
