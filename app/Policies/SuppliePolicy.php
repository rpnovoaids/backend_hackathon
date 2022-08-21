<?php

namespace App\Policies;

use App\Models\Order\Supplie;
use App\Models\Security\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuppliePolicy
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
     * @param  \App\Models\Order\Supplie  $supplie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Supplie $supplie)
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
     * @param  \App\Models\Order\Supplie  $supplie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Supplie $supplie)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Order\Supplie  $supplie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Supplie $supplie)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Order\Supplie  $supplie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Supplie $supplie)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Order\Supplie  $supplie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Supplie $supplie)
    {
        //
    }
}
