<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specifications extends Model
{
    protected $table = 'tbl_specification';
    public $timestamps = false;
    protected $fillable = array('product', 'title', 'specification');
}
