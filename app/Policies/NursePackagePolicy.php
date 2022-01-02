<?php

namespace App\Policies;

use App\Models\NursePackage;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NursePackagePolicy
{
    use HandlesAuthorization;

    public function view($user, $nursePackage)
    {
        return true;
    }

    public function create($user)
    {
        return false;
    }

    public function update($user, $nursePackage)
    {
        return false;
    }

    public function delete($user, $nursePackage)
    {
        return false;
    }
}
