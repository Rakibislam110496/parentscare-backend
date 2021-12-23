<?php

namespace App\Policies;

use App\Models\DoctorDepartment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DoctorDepartmentPolicy
{
    use HandlesAuthorization;


    public function view( $user,  $doctorDepartment)
    {
        return  true;
    }

    public function create( $user)
    {
        return false;
    }

    public function update( $user,  $doctorDepartment)
    {
        return false;
    }

    public function delete( $user, $doctorDepartment)
    {
        return false;
    }
}
