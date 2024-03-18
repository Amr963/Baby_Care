<?php

namespace App\Observers;

use App\Models\ChildWeightStats;

class ChildWeightStatsObserver
{
    /**
     * Handle the ChildWeightStats "created" event.
     */
    public function created(ChildWeightStats $childWeightStats): void
    {
        $age = $childWeightStats->age;

        if (($childWeightStats->age_category === 'month' && $age == 0) || ($childWeightStats->age_category === 'month' && $age == 1) || ($childWeightStats->age_category === 'month' && $age == 2)) {
            $weight = 3.25;
        } elseif ($age >= 3 && $age <= 11 && $childWeightStats->age_category === 'month') {
            $weight = ($age + 9) / 2;
        } elseif ($age >= 0 && $age <= 6 && $childWeightStats->age_category === 'year') {
            $weight = $age * 2 + 8;
        } elseif ($age >= 7 && $age <= 12 && $childWeightStats->age_category === 'year') {
            $weight = ($age * 7 - 5) / 2;
        } else {
            $weight = 0;
        }
        $childWeightStats->update(['weightKg' => $weight]);
    }

    /**
     * Handle the ChildWeightStats "updated" event.
     */
    public function updated(ChildWeightStats $childWeightStats): void
    {
        //
    }

    /**
     * Handle the ChildWeightStats "deleted" event.
     */
    public function deleted(ChildWeightStats $childWeightStats): void
    {
        //
    }

    /**
     * Handle the ChildWeightStats "restored" event.
     */
    public function restored(ChildWeightStats $childWeightStats): void
    {
        //
    }

    /**
     * Handle the ChildWeightStats "force deleted" event.
     */
    public function forceDeleted(ChildWeightStats $childWeightStats): void
    {
        //
    }
}
