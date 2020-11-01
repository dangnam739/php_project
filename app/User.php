<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    protected $connection = '';
    protected $attributes = [
        'no_posts'=>0,
        'no_likes'=>0,
    ];
}
