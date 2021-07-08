<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function services(){
        return $this->belongsToMany('App\Service');
    }

    public function products(){
        return $this->belongsToMany('App\Product');
    }
}
