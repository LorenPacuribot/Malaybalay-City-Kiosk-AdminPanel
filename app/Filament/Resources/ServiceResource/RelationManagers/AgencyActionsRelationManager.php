<?php

namespace App\Filament\Resources\ServiceResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ClientAction;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;
use App\Models\Service;

class AgencyActionsRelationManager extends RelationManager
{
    protected static string $relationship = 'agencyActions';

    public function form(Form $form): Form
    {
        return $form
        ->schema([
            Select::make('client_action_id')
                        ->label('Client Action')
                        ->options(ClientAction::all()->pluck('name', 'id'))
                        ->preload()
                        ->required(),
            Forms\Components\TextInput::make('agency_action')
                ->label('Agency Action')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('fees_to_be_paid')
                ->label('Fees to be Paid')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('processing_time')
                ->label('Processing Time')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('person_in_charge')
                ->label('Person in Charge')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('contact_number')
                ->label('Contact Number')
                ->required()
                ->maxLength(255),
        ]);

    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('AgencyActions')
            ->columns([
                Tables\Columns\TextColumn::make('client_action_id')
                ->getStateUsing(function ($record) {
                    return ClientAction::find($record->client_action_id)->name;
                }),
                Tables\Columns\TextColumn::make('agency_action'),
                Tables\Columns\TextColumn::make('fees_to_be_paid'),
                Tables\Columns\TextColumn::make('processing_time'),
                Tables\Columns\TextColumn::make('person_in_charge'),
                Tables\Columns\TextColumn::make('contact_number'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}
