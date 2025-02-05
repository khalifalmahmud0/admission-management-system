<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class signupmodel extends Model {
    protected $table      = 'users';
    protected $primaryKey = 'id';
    public $incrementing  = true;
    protected $keyType    = 'bigint';
    public $timestamps    = true;
    protected $dateformat = 'U';
}
