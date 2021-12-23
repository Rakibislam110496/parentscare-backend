<?php

namespace App\Policies;

use App\Models\HomeSampleCategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HomeSampleCategoryPolicy
{
    use HandlesAuthorization;


    public function view($user, $homeSampleCategory)
    {
        return true;
    }

    public function create($user)
    {
        return false;
    }

    public function update($user, $homeSampleCategory)
    {
        return false;
    }

    public function delete($user, $homeSampleCategory)
    {
        return false;
    }
}
