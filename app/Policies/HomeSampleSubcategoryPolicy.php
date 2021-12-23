<?php

namespace App\Policies;

use App\Models\HomeSampleSubcategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HomeSampleSubcategoryPolicy
{
    use HandlesAuthorization;


    public function view($user, $homeSampleSubcategories)
    {
        return true;
    }

    public function create($user)
    {
        return false;
    }

    public function update($user, $homeSampleSubcategories)
    {
        return false;
    }

    public function delete($user, $homeSampleSubcategories)
    {
        return false;
    }
}
