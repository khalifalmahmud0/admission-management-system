<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class SignUpModel extends Model {
    /**
     * Model Variables
     */
    protected $table      = 'tableforcreateaccount';
    protected $primaryKey = 'id';
    public $incrementing  = true;
    protected $keyType    = 'int';
    public $timestamps    = false;
    protected $dateformat = 'U';
}
