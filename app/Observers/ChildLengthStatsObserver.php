<?php

namespace App\Observers;

use App\Models\ChildLengthStats;

class ChildLengthStatsObserver
{
    /**
     * Handle the ChildLengthStats "created" event.
     */
    public function created(ChildLengthStats $childLengthStats): void
    {
        $age = $childLengthStats->age;

        if ($age == 0) {
            $length = 50;
        } elseif ($age == 1) {
            $length = 75;
        } elseif ($age >= 2 && $age <= 12) {
            $length = $age * 6 + 77;
        } else {
            $length = 0;
        }
        $childLengthStats->update(['length_child' => $length]);
    }

    /**
     * Handle the ChildLengthStats "updated" event.
     */
    public function updated(ChildLengthStats $childLengthStats): void
    {
        //
    }

    /**
     * Handle the ChildLengthStats "deleted" event.
     */
    public function deleted(ChildLengthStats $childLengthStats): void
    {
        //
    }

    /**
     * Handle the ChildLengthStats "restored" event.
     */
    public function restored(ChildLengthStats $childLengthStats): void
    {
        //
    }

    /**
     * Handle the ChildLengthStats "force deleted" event.
     */
    public function forceDeleted(ChildLengthStats $childLengthStats): void
    {
        //
    }
}