<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassesResource\Pages;
use App\Filament\Resources\ClassesResource\RelationManagers;
use App\Models\Classes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;

class ClassesResource extends Resource
{
    protected static ?string $model = Classes::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    // Menu lateral
    protected static ?string $navigationLabel = 'Classes';
    // Título
    protected static ?string $pluralLabel = 'Classes';
    // Botão de ação
    protected static ?string $label = 'classe';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nome da classe')
                    ->columnSpanFull()
                    ->required(),
                Section::make('Pontos de Vida da Classe')
                    ->columns(2)
                    ->schema([
                        TextInput::make('initial_pv')
                            ->label('Pontos de vida base')
                            ->numeric()
                            ->required(),
                        TextInput::make('add_pv')
                            ->label('Pontos de vida adicionais por NEX')
                            ->numeric()
                            ->required(),
                    ]),
                Section::make('Pontos de Esforço da Classe')
                    ->columns(2)
                    ->schema([
                        TextInput::make('initial_pe')
                            ->label('PE Inicial')
                            ->numeric()
                            ->required(),
                        TextInput::make('add_pe')
                            ->label('PE Adicional por NEX')
                            ->numeric()
                            ->required(),
                    ]),
                Section::make('Sanidade da Classe')
                    ->columns(2)
                    ->schema([
                        TextInput::make('initial_san')
                            ->label('San Inicial')
                            ->numeric()
                            ->required(),
                        TextInput::make('add_san')
                            ->label('San Adicional por NEX')
                            ->numeric()
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('initial_pv')
                    ->label('PV Inicial')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('initial_pe')
                    ->label('PE Inicial')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('initial_san')
                    ->label('San Inicial')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListClasses::route('/'),
            'create' => Pages\CreateClasses::route('/create'),
            'edit' => Pages\EditClasses::route('/{record}/edit'),
            'view' => Pages\ViewClasses::route('/{record}'),
        ];
    }
}
