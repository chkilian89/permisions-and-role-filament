<?php

namespace FilamentPermission\Filament\Resources;

use Filament\Resources\Resource;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Forms;
use Filament\Tables;
use Spatie\Permission\Models\Role;

class RoleResource extends Resource
{
    protected static string $model = Role::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('area')
                    ->label('Área')
                    ->required()
                    ->maxLength(100),
                Forms\Components\Select::make('permissions')
                    ->label('Permissões')
                    ->multiple()
                    ->relationship('permissions', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('area')->label('Área'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('area')
                    ->options(fn () => Role::query()->distinct()->pluck('area', 'area')->toArray()),
            ]);
    }
}
