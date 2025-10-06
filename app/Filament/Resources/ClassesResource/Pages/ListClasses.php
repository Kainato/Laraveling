<?php

namespace App\Filament\Resources\ClassesResource\Pages;

use App\Filament\Resources\ClassesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClasses extends ListRecords
{
    protected static string $resource = ClassesResource::class;

    protected function getHeaderActions(): array
    {
        if (auth()->user()?->is_admin === 1) {
            return [
                Actions\CreateAction::make(),
            ];
        } else {
            return [];
        }
    }
}
