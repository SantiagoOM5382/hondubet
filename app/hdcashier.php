<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hdcashier extends Model
{
    protected $fillable = ['name', 'last_name', 'email', 'phone', 'city', 'theyre_new'];
}
