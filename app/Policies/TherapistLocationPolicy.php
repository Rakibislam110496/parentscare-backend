<?php

namespace App\Policies;

use App\Models\TherapistLocation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TherapistLocationPolicy
{
    use HandlesAuthorization;


    public function view($user, $therapistLocation)
    {
        return true;
    }

    public function create($user)
    {
        return false;
    }

    public function update($user, $therapistLocation)
    {
        return false;
    }

    public function delete($user, $therapistLocation)
    {
        return false;
    }
}
