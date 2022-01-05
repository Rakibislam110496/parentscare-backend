<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TherapistLocation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function therapists(){
        return $this->hasMany(Therapist::class);
    }
}
