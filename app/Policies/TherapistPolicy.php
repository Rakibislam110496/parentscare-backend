<?php

namespace App\Policies;

use App\Models\Therapist;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TherapistPolicy
{
    use HandlesAuthorization;


    public function view($user, $therapist)
    {
        return true;
    }

    public function create($user)
    {
        return false;
    }

    public function update($user, $therapist)
    {
        if(get_class($user) == Therapist::class && $user->id == $therapist->id) return true;

        return false;
    }

    public function delete($user, $therapist)
    {
        return false;
    }
}
