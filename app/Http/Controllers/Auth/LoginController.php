<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

//Base Home Controller.
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('welcome');
    }

    public function create_user() {
        return view("register");
    }

    public function store_user(Request $request) {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'role_id' =>['required', 'integer'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->name = $request-> name;
        $user->role_id = $request->role_id;
        $user->password=Hash::make($request->password);

        $user->save();

        return redirect(route('login'));

    }

    public function login() {
        return view('login') ;
    }
    public function store_login(Request $request) {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('home');
        }
        else{
            return redirect('login');
        }
    }

    public function logout() {
        Auth::logout();
        return view('login');
    }
}
