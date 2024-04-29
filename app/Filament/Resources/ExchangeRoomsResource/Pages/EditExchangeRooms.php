<?php

namespace App\Filament\Resources\ExchangeRoomsResource\Pages;

use App\Filament\Resources\ExchangeRoomsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExchangeRooms extends EditRecord
{
    protected static string $resource = ExchangeRoomsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
