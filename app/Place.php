<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use SoftDeletes;

    // Mass assignment with fillable = field yang boleh diisi
    // Mass assignment with guarded = field yang tidak boleh diisi
    protected $fillable = ['name', 'city', 'postalCode'];
}
