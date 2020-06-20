<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    protected $fillable = ["titulo","desarrollador","editor","franquicia","precio"];
}
