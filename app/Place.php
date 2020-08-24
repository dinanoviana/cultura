<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    // Mass assignment with fillable = field yang boleh diisi
    // Mass assignment with guarded = field yang tidak boleh diisi
    protected $fillable = ['name', 'city', 'postalCode'];
}
