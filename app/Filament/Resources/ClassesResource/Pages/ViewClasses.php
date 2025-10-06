<?php

namespace App\Filament\Resources\ClassesResource\Pages;

use App\Filament\Resources\ClassesResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Actions;

class ViewClasses extends ViewRecord
{
    protected static string $resource = ClassesResource::class;

    protected function getHeaderActions(): array
    {
        if (auth()->user()?->is_admin === 1) {
            return [
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ];
        } else {
            return [];
        }
    }
}
