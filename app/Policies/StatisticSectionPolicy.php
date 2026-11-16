<?php

namespace App\Policies;

use App\Models\StatisticSection;
use App\Models\User;

class StatisticSectionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, StatisticSection $statisticSection): bool
    {
        return StatisticSection::query()->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return ! StatisticSection::query()->exists();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, StatisticSection $statisticSection): bool
    {
        return StatisticSection::query()->exists();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, StatisticSection $statisticSection): bool
    {
        return StatisticSection::query()->exists();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, StatisticSection $statisticSection): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, StatisticSection $statisticSection): bool
    {
        return false;
    }
}
