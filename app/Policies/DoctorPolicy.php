<?php

namespace App\Policies;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use PhpParser\Comment\Doc;

class DoctorPolicy
{
    use HandlesAuthorization;


    public function view($user, $doctor)
    {
        return true;
    }

    public function create($user)
    {
        return false;
    }

    public function update($user, $doctor)
    {
        if (get_class($user) === Doctor::class && $user->id === $doctor->id) return true;

        return false;
    }

    public function delete($user, $doctor)
    {
        return false;
    }


}
