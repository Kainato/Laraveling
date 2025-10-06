<?php

namespace App\Filament\Resources\ClassesResource\Pages;

use App\Filament\Resources\ClassesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClasses extends EditRecord
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

    protected function schemaForm(): ?\Closure
    {
        return fn () => $this->getResource()::form($this->form)->getSchema();
    }

    public static function canEdit($record): bool
    {
        return auth()->user()?->is_admin === 1;
    }
}
