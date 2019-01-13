<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specifications extends Model
{
    protected $table = 'tbl_specifications';
    public $timestamps = false;
    protected $fillable = array('product', 'title', 'specification');
}
