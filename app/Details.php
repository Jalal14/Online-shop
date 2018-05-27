<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table = 'tbl_details';
    public $timestamps = false;
    protected $fillable = array('product', 'details');
}
