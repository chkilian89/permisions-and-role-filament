<?php

namespace FilamentPermission\Filament\Resources;

use Filament\Resources\Resource;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Forms;
use Filament\Tables;
use Spatie\Permission\Models\Permission;

class PermissionResource extends Resource
{
    protected static string $model = Permission::class;

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
                    ->options(fn () => Permission::query()->distinct()->pluck('area', 'area')->toArray()),
            ]);
    }
}
