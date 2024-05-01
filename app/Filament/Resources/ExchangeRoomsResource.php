<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Office;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ExchangeRooms;
use Filament\Resources\Resource;
use App\Models\OfficeLocationPivot;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExchangeRoomsResource\Pages;
use App\Filament\Resources\ExchangeRoomsResource\RelationManagers;
use App\Models\Location;

class ExchangeRoomsResource extends Resource
{
    protected static ?string $model = OfficeLocationPivot::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-path';

    protected static ?string $navigationLabel ='Room Assignment';

    protected static ?string $modelLabel = 'Room Assignment';

    protected static ?string $slug = 'room-assignment';

    protected static ?string $navigationGroup = 'INFORMATION MANAGEMENT';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Select::make('location_id')
                        ->label('Location')
                        ->options(Location::all()->pluck('name', 'id'))
                        ->preload()
                        ->required(),
                    Select::make('office_id')
                        ->label('Office')
                        ->options(Office::all()->pluck('name', 'id'))
                        ->disabled()
                        ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('office_id')
                ->label('Office')
                ->getStateUsing(function ($record) {
                    return Office::find($record->office_id)->name;
                })
                ->sortable()
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        default => 'primary',
                    }),

                Tables\Columns\TextColumn::make('location_id')
                ->label('Room Assigned')
                ->getStateUsing(function ($record) {
                    return Location::find($record->location_id)->name;
                })
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        default => 'success',
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListExchangeRooms::route('/'),
            'create' => Pages\CreateExchangeRooms::route('/create'),
            'edit' => Pages\EditExchangeRooms::route('/{record}/edit'),
        ];
    }
}
