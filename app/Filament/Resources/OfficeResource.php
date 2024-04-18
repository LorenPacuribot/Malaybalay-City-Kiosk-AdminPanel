<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Office;
use App\Models\Location;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OfficeResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Filament\Resources\OfficeResource\RelationManagers;
use App\Filament\Actions\BulkPrintAction;


class OfficeResource extends Resource
{
    protected static ?string $model = Office::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationGroup = 'INFORMATION MANAGEMENT';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('')
                ->schema([
                    Select::make('location_id')
                        ->label('Location')
                        ->options(Location::all()->pluck('name', 'id'))
                        ->preload()
                        ->required(),
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('office_hour')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('contact_information')
                        ->required(),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name')
                ->label('Office Name')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('location_id')
                ->label('Location')
                ->getStateUsing(function ($record) {
                    return Location::find($record->location_id)->name;
                })
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        default => 'primary',
                    }),
                    // Tables\Columns\TextColumn::make('location_id')
                    // ->label('Location')
                    // ->getStateUsing(function ($record) {
                    //     $location = Location::find($record->location_id);
                    //     return $location ? $location->name : null;
                    // })
                    // ->sortable()
                    // ->searchable()
                    // ->badge()
                    // ->color(fn (string $state): string => match ($state) {
                    //     default => 'primary',
                    // }),

                // Tables\Columns\TextColumn::make('office_hour')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('contact_information')
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
                // Tables\Actions\Action::make('pdf')
                //     ->label('PDF')
                //     ->color('success')
                //     ->icon('heroicon-o-printer')
                //     ->url(fn (Office $record) => route('generate-pdf', $record))
                //     ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    BulkPrintAction::make('pdf')
                    ->label('PDF')
                    ->color('success')
                    ->icon('heroicon-o-printer')
                   // ->confirm(fn ($records) => 'Are you sure you want to print ' . count($records) . ' offices?'),
                   ])
            ]);
    }

    protected function handleBulkPrint($records)
{
    // Generate PDF for selected offices
    $pdf = PDF::loadView('bulk-print', ['offices' => $records]);

    // Download or display the PDF
    return $pdf->download('offices.pdf');
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
            'index' => Pages\ListOffices::route('/'),
            'create' => Pages\CreateOffice::route('/create'),
            'edit' => Pages\EditOffice::route('/{record}/edit'),
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
