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
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Placeholder;

class CharResource extends Resource
{
    protected static ?string $model = Character::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    // Menu lateral
    protected static ?string $navigationLabel = 'Personagens';
    // Título
    protected static ?string $pluralLabel = 'Meus personagens';
    // Botão de ação
    protected static ?string $label = 'personagem';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('user_id')
                ->label('Usuário')
                ->default(auth()->id())
                ->disabled()
                ->hidden()
                ->required(),
            Section::make(heading: 'Informações Básicas')
                ->columns(2)
                ->schema([
                    TextInput::make('name')
                        ->label('Nome do personagem')
                        ->columnSpanFull()
                        ->required(),
                    Select::make('class_id')
                        ->relationship('class', 'name')
                        ->label('Classe'),
                    Select::make('origin_id')
                        ->relationship('origin', 'name')
                        ->label('Origem'),
                    Select::make('trail_id')
                        ->relationship('trail', 'name')
                        ->label('Trilha'),
                    TextInput::make('nex')
                        ->numeric()
                        ->label('NEX')
                        ->step(5),
                ]),
                Section::make(heading: 'Status')
                    ->columns(3)
                    ->schema([
                        TextInput::make('pv')
                            ->numeric()
                            ->label('Vida'),
                        TextInput::make('pe')
                            ->numeric()
                            ->label('Pontos de esforço'),
                        TextInput::make('san')
                                ->numeric()
                                ->label('Sanidade'),
                        Placeholder::make('pv_total')
                            ->label('Vida Máxima')
                            ->content(function ($get) {
                                $vigor = (int) $get('force');
                                $nex = (int) $get('nex');
                                $base = 20 + $vigor;
                                $increments = intdiv($nex, 5);
                                $pv_max = $base + $increments * (4 + $vigor);
                                return $pv_max . ' PV';
                            }),
                        Placeholder::make('pe_total')
                            ->label('PE Máximo')
                            ->content(function ($get) {
                                $presence = (int) $get('presence');
                                $nex = (int) $get('nex');
                                $base = 2 + $presence;
                                $increments = intdiv($nex, 5);
                                $pe_max = $base + $increments * (2 + $presence);
                                return $pe_max . ' PE';
                            }),
                        Placeholder::make('san_inicial')
                            ->label('SAN Inicial')
                            ->content(function ($get) {
                                $nex = (int) $get('nex');
                                $increments = intdiv($nex, 5);
                                $san_initial = 12 + $increments * 3;
                                return $san_initial . ' SAN';
                            })
                ]),
            Section::make(heading: 'Atributos')
                    ->columns(5)
                    ->schema([
                    Placeholder::make('pontos_atributos_disponiveis')
                        ->columnSpanFull()
                        ->label('Pontos de atributos disponíveis')
                        ->content(function ($get) {
                            $nex = (int) $get('nex');
                            // Pontos extras em 20%, 50%, 80%, 95%
                            $bonus = 4;
                            $base = 5;
                            if ($nex >= 20) $bonus++;
                            if ($nex >= 50) $bonus++;
                            if ($nex >= 80) $bonus++;
                            if ($nex >= 95) $bonus++;
                            $bonus = min($bonus, 5); // Limite de 5 pontos de bônus
                            $total = $bonus + $base;

                            // Soma dos pontos já distribuídos nos atributos acima do valor base (1)
                            $distribuidos = 0;
                            $atributos = [
                                'strength',
                                'agility',
                                'intellect',
                                'presence',
                                'force',
                            ];
                            foreach ($atributos as $atributo) {
                                $valor = (int) $get($atributo);
                                // Cada ponto acima de 0 diminui do contador final
                                if ($valor > 0) {
                                    $distribuidos += $valor;
                                }
                            }

                            $disponiveis = $total - $distribuidos;
                            return $disponiveis . ' pontos';
                        }),
                    TextInput::make('strength')
                        ->numeric()
                        ->label('Força'),
                    TextInput::make('agility')
                        ->numeric()
                        ->label('Agilidade'),
                    TextInput::make('intellect')
                        ->numeric()
                        ->label('Intelecto'),
                    TextInput::make('presence')
                        ->numeric()
                        ->label('Presença'),
                    TextInput::make('force')
                        ->numeric()
                        ->label('Vigor')
                ]),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([Tables\Columns\TextColumn::make('name')->sortable()->searchable()->label('Nome'), Tables\Columns\TextColumn::make('class.name')->label('Classe'), Tables\Columns\TextColumn::make('origin.name')->label('Origem'), Tables\Columns\TextColumn::make('trail.name')->label('Trilha'), Tables\Columns\TextColumn::make('nex')->label('NEX')])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make(), ExportAction::make('export')])]);
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
        ];
    }
}
