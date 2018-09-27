<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	public function photos()
	{
	    return $this->hasMany('App\Photo');
	}
	public function getFirstImageAttribute() {
  		return $this->photos()->first();
	}
}
