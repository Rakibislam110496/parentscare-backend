<?php

namespace App\Policies;

use App\Models\CareGiver;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CareGiverPolicy
{
    use HandlesAuthorization;


    public function view($user, $careGiver)
    {
        return true;
    }

    public function create($user)
    {
        return false;
    }

    public function update($user, $careGiver)
    {
        if (get_class($user) == CareGiver::class && $user->id == $careGiver->id) return true;
        return false;
    }


    public function delete($user, $careGiver)
    {
        return false;
    }
}
