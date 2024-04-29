<?php

namespace App\Filament\Resources\OfficeResource\Pages;

use Filament\Actions;
use App\Models\Location;
use Filament\Forms\Form;
use App\Models\OfficeLocationPivot;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\OfficeResource;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EditOffice extends EditRecord
{
    protected static string $resource = OfficeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
