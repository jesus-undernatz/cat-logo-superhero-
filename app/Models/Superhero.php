<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    protected $fillable = ['name', 'superhero_name', 'superpower', 'weakness', 'image'];
}
