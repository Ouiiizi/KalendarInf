<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public function home()
    {
        return view('login');
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->password = $request->password;
        $student->save();
        return 'Saved';
        $filenameWithExt = $request->file('image')->getClientOriginalName();
    }


    public function delete($id)
    {
        Student::where('id', $id)->delete();
        return redirect('/list');
    }


    public function login()
    {
        $student = Student::get();
        return view('welcome');
    }

    public function loginForm(Request $request)
    {
        $credentials = [
            'email'=> $request->username,
            'password'=> $request->password
        ];
        if(Auth::attempt($credentials)){
            return redirect('/home'); } else{
            return 'wrong credentials';
        }
    }

    public function static()
    {
        return view('static');
    }


    public function register(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',

        ]);

        $student = new student();

        $student->username = $data['username'];
        $student->password = $data['password'];

        return view('home');
    }

    public function registerdisplay()
    {
        return view('register');


    }
    public function list(){

//        $list = new table();

//        $list->


    }
}



