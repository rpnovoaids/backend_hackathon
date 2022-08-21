<?php

namespace App\Policies;

use App\Models\Order\MeterHistory;
use App\Models\Security\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MeterHistoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Security\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Order\MeterHistory  $meterHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, MeterHistory $meterHistory)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Security\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Order\MeterHistory  $meterHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, MeterHistory $meterHistory)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Order\MeterHistory  $meterHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, MeterHistory $meterHistory)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Order\MeterHistory  $meterHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, MeterHistory $meterHistory)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Order\MeterHistory  $meterHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, MeterHistory $meterHistory)
    {
        //
    }
}
