<?php

namespace App\Policies;

use App\Models\PatientGuide;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientGuidePolicy
{
    use HandlesAuthorization;


    public function view( $user,  $patientGuide)
    {
        return true;
    }


    public function create( $user)
    {
        return false;
    }


    public function update( $user,  $patientGuide)
    {
        if(get_class($user) == PatientGuide::class && $user->id == $patientGuide->id) return true;

        return false;
    }


    public function delete( $user,  $patientGuide)
    {
        return false;
    }
}
