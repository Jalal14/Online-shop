<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationRequest extends Model
{
    protected $table = 'tbl_registration_requests';
    public $timestamps = false;
}
