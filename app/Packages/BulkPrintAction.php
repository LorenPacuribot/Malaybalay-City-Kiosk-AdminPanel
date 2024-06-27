<?php

namespace App\Packages;

use Filament\Actions\Action; 
use Closure;
use Filament\Actions\Contracts\HasActions;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Database\Eloquent\Model;

class BulkPrintAction extends Action
{

    public static function getDefaultName(): ?string
    {
        return 'Bulk Print';
    }
}
