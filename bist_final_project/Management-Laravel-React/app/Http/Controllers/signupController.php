<?php

namespace App\Http\Controllers;

use App\Http\Models\signupmodel;
use Illuminate\Http\Request;

class signupController extends Controller {
    public function getsignupControllerData( Request $Request ) {
        $result = signupmodel::all();
        return $result;
    }
}
