<?php

namespace App\Policies;

use App\Models\Pelicula;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeliculaPolicy
{
    use HandlesAuthorization;


    public function before(User $user, $ability)
    {

        if ($user->esProveedor() == false && $user->esAdministrador() == false) {
            return false;
        }

        else if (($user->esProveedor() && ($ability == 'delete' || $ability == 'create') ) || $user->esAdministrador()) {
            return true;
        }

        else {
            return false;
        }

    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pelicula  $pelicula
     * @return mixed
     */
    public function view(User $user, Pelicula $pelicula)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pelicula  $pelicula
     * @return mixed
     */
    public function update(User $user, Pelicula $pelicula)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pelicula  $pelicula
     * @return mixed
     */
    public function delete(User $user, Pelicula $pelicula)
    {

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pelicula  $pelicula
     * @return mixed
     */
    public function restore(User $user, Pelicula $pelicula)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pelicula  $pelicula
     * @return mixed
     */
    public function forceDelete(User $user, Pelicula $pelicula)
    {
        //
    }
}
