<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }
    public function index(Request $request)
    {
        user::create([
            "username"=>$request->username,
            "password"=>$request->password,
            "no_telp"=>$request->telpon
        ]);
    }
}
