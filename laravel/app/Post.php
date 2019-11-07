<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';
    protected $filable=['title','link', 'category'];
    public $timestamps=true;
}
