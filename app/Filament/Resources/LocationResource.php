<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Location;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LocationResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LocationResource\RelationManagers;
use Illuminate\Database\Eloquent\Relations\Relation;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;

class LocationResource extends Resource
{
    protected static ?string $model = Location::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    protected static ?string $navigationGroup = 'SYSTEM MANAGEMENT';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Room Name')
                        ->maxLength(255)
                        ->default(null),
                        Select::make('floor')
                        ->options([
                            'Not Located at City Hall' => 'Not Located at City Hall',
                            '1' => 'First Floor',
                            '2' => 'Second Floor',
                            '3' => 'Third Floor',
                            ])
                ])->columns(2),

                Forms\Components\Section::make('')
                        ->schema([
                    Forms\Components\TextInput::make('x')
                        ->required()
                        ->numeric(),
                    Forms\Components\TextInput::make('y')
                        ->required()
                        ->numeric(),
                    Forms\Components\TextInput::make('z')
                        ->required()
                        ->numeric(),
                ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Room Name')
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        default => 'primary',
                    }),
                Tables\Columns\TextColumn::make('floor')
                    ->sortable(),
                // Tables\Columns\TextColumn::make('x')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('y')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('z')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListLocations::route('/'),
            'create' => Pages\CreateLocation::route('/create'),
            'edit' => Pages\EditLocation::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
