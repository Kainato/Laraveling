<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Resources\CharResource;

Route::get('/chars', CharResource::getPages()['index'])->name('chars.index');
Route::get('/chars/create', CharResource::getPages()['create'])->name('chars.create');
Route::get('/chars/{record}/edit', CharResource::getPages()['edit'])->name('chars.edit');
Route::get('/chars/{record}', CharResource::getPages()['show'])->name('chars.show');