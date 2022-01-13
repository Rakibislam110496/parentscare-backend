<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalPackageSubscription extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function package(){
        return $this->belongsTo(GlobalPackage::class, 'global_package_id');
    }

    public function order(){
        return $this->morphOne(Order::class, 'orderable');
    }
}
