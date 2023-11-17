<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */

    use HandlesAuthorization;
    public function register(User $user)
    {
        // Permitir o registro apenas para usuários autenticados
        return $user->id !== null;
    }
}
