<?php

namespace App\Policies;

use App\Models\User;

class GuestPolicy
{
    /**
     * Create a new policy instance.
     */
    public function registerSaver(User $user)
    {
        return $user->level === 'user'; // Modifique conforme necessário
    }

    public function view(User $user)
    {
        return in_array($user->level, ['user', 'admin']);
    }

    

}
