<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    protected $redirectTo = RouteServiceProvider::HOME;
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    public function crud(){
        $data = user::all();
        return view('admin.home',compact('data'));
    }

    public function index(Request $request)
    {
        User::create([
            "name"=>$request->username,
            "password"=>Hash::make($request->password),
            "email"=>$request->email,
            "role"=>0,
        ]);
        return redirect()->route('login');
    }

    public function ceklogin(Request $request)
    {
        $input = $request->all();
        // dd($input["email"]);
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin');
                // return view("seller.seller-dashboard");
            }else if (auth()->user()->role == 'user') {
                return redirect()->route('homeuser');
                // return view("user.user-dashboard");
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
}
