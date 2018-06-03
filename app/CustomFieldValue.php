<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomFieldValue extends Model
{
    protected $fillable = ['value'];

    public function customField()
    {
    	return $this->belongsTo('App\CustomField');
    }

    public function clients()
    {
    	return $this->morphedByMany('App\Client', 'custom_field_valuable');
    }
}
