<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Office;
use App\Models\Service;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use App\Models\DocumentaryRequirement;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Filament\Resources\ServiceResource\RelationManagers;


class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';

    protected static ?string $navigationGroup = 'INFORMATION MANAGEMENT';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('')
                ->schema([
                    Select::make('office_id')
                        ->options(Office::all()->pluck('name', 'id'))
                        ->preload()
                        ->required(),
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description_of_service')
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('office_and_division')
                        ->required()
                        ->maxLength(255)]),

                    Forms\Components\Section::make('')
                        ->schema([
                    Forms\Components\TextInput::make('classification')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('type_of_transaction')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('who_may_avail')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('total_processing_time')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('total_fees')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('period_of_extension')
                        ->required()
                        ->maxLength(255),
                ])->columns(3),

             ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('office_id')
                ->label('Office Name')
                ->getStateUsing(function ($record) {
                    return Office::find($record->office_id)->name;
                })
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Service Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('office_and_division')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('classification')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('type_of_transaction')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('who_may_avail')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('total_processing_time')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('total_fees')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('period_of_extension')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
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
            RelationManagers\DocumentaryRequirementsRelationManager::class,
            RelationManagers\ClientActionsRelationManager::class,
            RelationManagers\AgencyActionsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
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
