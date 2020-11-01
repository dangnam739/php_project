<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $primaryKey = 'comment_id';
    public $timestamps = false;
    protected $connection = '';
}
