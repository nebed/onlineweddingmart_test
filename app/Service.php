<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     public function vendors()
    {
    	return $this->hasMany('App\Vendor');
    }

    public function vendorspreview()
    {
    	return $this->hasMany('App\Vendor')->where('approved',true)->take(4);
    }
}
