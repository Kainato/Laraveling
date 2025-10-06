<?php

namespace App\Filament\Resources\CharResource\Pages;

use App\Filament\Resources\CharResource;
use Filament\Actions;
use Filament\Resources\Pages\ShowRecord;

class ShowChar extends ShowRecord
{
    protected static string $resource = CharResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}