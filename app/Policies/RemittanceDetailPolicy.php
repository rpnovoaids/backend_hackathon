<?php

namespace App\Policies;

use App\Models\Inventory\RemittanceDetail;
use App\Models\Security\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RemittanceDetailPolicy
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
     * @param  \App\Models\Inventory\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, RemittanceDetail $remittanceDetail)
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
     * @param  \App\Models\Inventory\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, RemittanceDetail $remittanceDetail)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Inventory\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, RemittanceDetail $remittanceDetail)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Inventory\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, RemittanceDetail $remittanceDetail)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\Inventory\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, RemittanceDetail $remittanceDetail)
    {
        //
    }
}
