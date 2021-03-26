<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user)
    {
        return $user->email === 'jrobles@naturcode.eu';
    }

    public function viewAny(User $user)
    {
        return $user->email === 'jrobles@naturcode.eu' || $user->email == 'prueba@prueba.es';
    }

    public function view(User $user)
    {
        return $user->email === 'jrobles@naturcode.eu' || $user->email == 'prueba@prueba.es';
    }

    public function delete(User $user)
    {
        return $user->email === 'jrobles@naturcode.eu';
    }

    public function create(User $user)
    {
        return $user->email === 'jrobles@naturcode.eu';
    }
}
