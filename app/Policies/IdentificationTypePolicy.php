<?php

namespace App\Policies;

use App\Models\IdentificationType;
use App\Models\Security\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class IdentificationTypePolicy
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
     * @param  \App\Models\IdentificationType  $identificationType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, IdentificationType $identificationType)
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
     * @param  \App\Models\IdentificationType  $identificationType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, IdentificationType $identificationType)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\IdentificationType  $identificationType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, IdentificationType $identificationType)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\IdentificationType  $identificationType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, IdentificationType $identificationType)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Security\User  $user
     * @param  \App\Models\IdentificationType  $identificationType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, IdentificationType $identificationType)
    {
        //
    }
}
