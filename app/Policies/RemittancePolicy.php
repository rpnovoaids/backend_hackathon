<?php

namespace App\Policies;

use App\Models\Inventory\Remittance;
use App\Models\Security\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RemittancePolicy
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
     * @param  \App\Models\Inventory\Remittance  $remittance
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Remittance $remittance)
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
     * @param  \App\Models\Inventory\Remittance  $remittance
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Remittance $remittance)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Inventory\Remittance  $remittance
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Remittance $remittance)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Inventory\Remittance  $remittance
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Remittance $remittance)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Inventory\Remittance  $remittance
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Remittance $remittance)
    {
        //
    }
}