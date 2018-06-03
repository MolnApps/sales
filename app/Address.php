<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
    	'address1',
    	'address2',
    	'postalCode',
    	'city',
    	'province',
    	'countryCode'
    ];

    public function clients()
    {
    	return $this->morphedByMany('App\Client', 'addressable');
    }
}
