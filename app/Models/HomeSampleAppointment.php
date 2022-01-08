<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSampleAppointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subcategory(){
        return $this->belongsTo(HomeSampleSubcategory::class, 'home_sample_subcategories_id');
    }
}
