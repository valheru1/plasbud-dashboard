<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['surname', 'name', 'phone', 'street', 'home_number', 'city_code', 'city', 'country', 'description'];
}
