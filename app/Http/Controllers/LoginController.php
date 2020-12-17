<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function getUserByEmail($email){
        return DB::select('select * from users where email = ?', [$email]);
    }

    public function login(Request $request){
        $user = $this->getUserByEmail($request->input('email'));
        if($user == NULL) return "Not log inn";

        $password = $request->input('password');
        if($user[0]->password != $password) return "Not log in";

        print_r("logged");

        // generar token?
        print_r($request->input('_token')); //token generado
        return $user;
    }
}
