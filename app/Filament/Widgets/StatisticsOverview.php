<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\Service;
use App\Models\Office;
use App\Models\Location;

class StatisticsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->count())
            ->icon('heroicon-o-users')
            ->description('Total Users')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7,  10, 3, 15, 4, 7])
            ->color('primary'),

            Stat::make('Offices', Office::query()->count())
            ->icon('heroicon-o-building-office')
            ->description('Total Offices')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7,  10, 3, 15, 4, 7])
            ->color('primary'),

            Stat::make('Services', Service::query()->count())
            ->icon('heroicon-o-cog-8-tooth')
            ->description('Total Services')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7,  10, 3, 15, 4, 7])
            ->color('primary'),

            Stat::make('Location', Location::query()->count())
            ->icon('heroicon-o-map-pin')
            ->description('Total Locations')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7,  10, 3, 15, 4, 7])
            ->color('primary'),
        ];
    }
}
