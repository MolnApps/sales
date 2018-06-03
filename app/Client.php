<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name'];

    public function addresses()
    {
        return $this->morphToMany('App\Address', 'addressable');
    }

    public function customFieldValues()
    {
        return $this->morphToMany('App\CustomFieldValue', 'custom_field_valuable');
    }

    public function toVue()
    {
        return [
            'id' => $this->id, 
            'basicInfo' => [
                'name' => $this->name,
            ],
            'addresses' => $this->addresses()->get()->toArray(),
            'customFields' => $this->customFieldValues()->get()->toArray()
        ];
    }
}
