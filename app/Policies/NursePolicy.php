<?php

namespace App\Policies;

use App\Models\Nurse;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NursePolicy
{
    use HandlesAuthorization;


    public function view($user, $nurse)
    {
        return true;
    }

    public function create($user)
    {
        return false;
    }


    public function update($user, $nurse)
    {
        if (get_class($user) == Nurse::class && $user->id == $nurse->id) return true;

        return false;
    }


    public function delete($user, $nurse)
    {
        return false;
    }
}
