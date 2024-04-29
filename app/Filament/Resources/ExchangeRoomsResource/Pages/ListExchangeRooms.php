<?php

namespace App\Filament\Resources\ExchangeRoomsResource\Pages;

use App\Filament\Resources\ExchangeRoomsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExchangeRooms extends ListRecords
{
    protected static string $resource = ExchangeRoomsResource::class;

    protected function getHeaderActions(): array
    {
        return [
          //  Actions\CreateAction::make(),
            Actions\SwapAction::make()
            ->url(fn()=> route('swap.offices'))
            ->openUrlInNewTab(),
        ];
    }
}
