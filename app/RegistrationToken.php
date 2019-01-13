<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationToken extends Model
{
    protected $table = 'tbl_registration_tokens';
    public $timestamps = false;
}
