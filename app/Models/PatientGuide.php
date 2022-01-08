<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientGuide extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['password'];

    protected static function boot()
    {
        parent::boot();

        static :: addGlobalScope(new ActiveScope());
    }
}
