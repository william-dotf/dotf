<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    //protected $guarded =[];
    protected $fillable=['name','description','price','category'];


    public function orders(){
        return $this->belongsToMany('App\Order');
    }
}
