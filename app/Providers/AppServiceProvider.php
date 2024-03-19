<?php

namespace App\Providers;

use App\Models\ChildLengthStats;
use App\Models\ChildWeightStats;
use App\Observers\ChildLengthStatsObserver;
use App\Observers\ChildWeightStatsObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ChildWeightStats::observe(ChildWeightStatsObserver::class);
        ChildLengthStats::observe(ChildLengthStatsObserver::class);
    }
}