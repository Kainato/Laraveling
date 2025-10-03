<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CharResource\Pages;
use App\Filament\Resources\CharResource\RelationManagers;
use App\Models\Character;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;

class CharResource extends Resource
{
    protected static ?string $model = Character::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')->required(),
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\Select::make('class_id')
                ->relationship('class', 'name')
                ->required(),
                Forms\Components\Select::make('origin_id')
                ->relationship('origin', 'name')
                ->required(),
                Forms\Components\Select::make('trail_id')
                ->relationship('trail', 'name')
                ->required(),
                Forms\Components\TextInput::make('strength')->numeric(),
                Forms\Components\TextInput::make('agility')->numeric(),
                Forms\Components\TextInput::make('intellect')->numeric(),
                Forms\Components\TextInput::make('presence')->numeric(),
                Forms\Components\TextInput::make('force')->numeric(),
                Forms\Components\TextInput::make('nex')->numeric(),
                Forms\Components\TextInput::make('pv')->numeric(),
                Forms\Components\TextInput::make('pe')->numeric(),
                Forms\Components\TextInput::make('san')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable()->label('Nome'),
                Tables\Columns\TextColumn::make('class.name')->label('Classe'),
                Tables\Columns\TextColumn::make('origin.name')->label('Origem'),
                Tables\Columns\TextColumn::make('trail.name')->label('Trilha'),
                Tables\Columns\TextColumn::make('nex')->label('NEX'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportAction::make('export'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListChars::route('/'),
            'create' => Pages\CreateChar::route('/create'),
            'edit' => Pages\EditChar::route('/{record}/edit'),
            'show' => Pages\ShowChar::route('/{record}'),
        ];
    }
}