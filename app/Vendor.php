<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable
{
    
    use Notifiable;

    protected $guard = 'vendor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password', 'service_id', 'location_id','brand_name', 'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


     public function service()
    {
    	return $this->belongsTo('App\Service');
    }

    public function location()
    {
    	return $this->belongsTo('App\Location');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

}

