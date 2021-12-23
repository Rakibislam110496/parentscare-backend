<?php

namespace App\Policies;

use App\Models\ForeignMedicalLocation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ForeignMedicalLocationPolicy
{
    use HandlesAuthorization;


    public function view( $user,  $foreignMedicalLocation)
    {
        return true;
    }

    public function create( $user)
    {
        return false;
    }

    public function update( $user,  $foreignMedicalLocation)
    {
        return false;
    }

    public function delete( $user,  $foreignMedicalLocation)
    {
        return false;
    }
}
