<?php

namespace App\Filament\Resources\OfficeResource\Pages;

use App\Filament\Resources\OfficeResource;
use Filament\Actions;
use App\Packages\BulkPrintAction;
use Filament\Resources\Pages\ListRecords;

class ListOffices extends ListRecords
{
    protected static string $resource = OfficeResource::class;

    protected function getHeaderActions(): array
    {
        return [

            Actions\CreateAction::make(),
            BulkPrintAction::make()
            ->url(fn()=> route('download.offices'))
            ->openUrlInNewTab(),


        ];


    }


}
