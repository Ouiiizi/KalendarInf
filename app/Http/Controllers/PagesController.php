<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use App\Models\Lists;


class PagesController extends Controller
{

    public function dashboard(){
//        Mail::to('6942o.no@gmail.com')->send(new ContactMail());
//    $data = [
//        'name' => 'wizi is gang',
//        'age' => 1246
//    ];
//    return view('dashboard')->with($data);
    }

    public function displayList()
    {
        return view('list');
    }
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


    public function register()
    {
        return view('auth.register');
    }

    public function registerdisplay(){
        return view('register');
    }
    public function list(){
        return view('list');
    }
}



