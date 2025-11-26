<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puser extends Model
{
    protected $table = 'puser';

    protected $fillable = [
        'name',
        'pusername',
        'email',
        'profile',
        'password',
        'slug',
    ];
}
