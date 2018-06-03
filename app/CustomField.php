<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomField extends Model
{
    protected $fillable = ['name', 'title'];

    public function value()
    {
    	return $this->hasMany('App\CustomFieldValue', 'custom_field_id');
    }
}
