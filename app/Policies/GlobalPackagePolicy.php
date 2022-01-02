<?php

namespace App\Policies;

use App\Models\GlobalPackage;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GlobalPackagePolicy
{
    use HandlesAuthorization;

    public function view($user, $globalPackage)
    {
        return true;
    }

    public function create($user)
    {
        return false;
    }

    public function update($user, $globalPackage)
    {
        return false;
    }

    public function delete($user, $globalPackage)
    {
        return false;
    }
}
