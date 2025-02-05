<?php
namespace App\Http\Controllers;

use App\Http\Models\SignUpModel;
use Illuminate\Http\Request;

class SignUpController extends Controller {
    public function get_signuplist( Request $Request ) {
        $result = SignUpModel::all();
        return $result;
    }
}
