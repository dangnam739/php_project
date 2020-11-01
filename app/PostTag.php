<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $table = "post_tag";
    protected $primaryKey = ['post_id', 'tag_id'];
    public $incrementing = false;

    public $timestamps = false;
    protected $connection = '';
}
