<?php

namespace App\Policies;

use App\Models\CareGiverService;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CareGiverServicePolicy
{
    use HandlesAuthorization;

    public function view($user, $careGiverService)
    {
        return true;
    }

    public function create($user)
    {
        return false;
    }

    public function update($user, $careGiverService)
    {
        return false;
    }

    public function delete($user, $careGiverService)
    {
        return false;
    }

}
