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
    public function home()
    {
        return view('login');
    }


    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->password = $request->password;
        $student->save();
        return 'Saved';

    }


//    public function delete($id)
//    {
//        Student::where('id', $id)->delete();
//        return redirect('/list');
//    }


//    public function login()
//    {
//        $student = Student::get();
//        return view('welcome');
//    }
//
//    public function loginForm(Request $request)
//    {
//        $credentials = [
//            'email' => $request->username,
//            'password' => $request->password
//        ];
//        if (Auth::attempt($credentials)) {
//            return redirect('/home');
//        } else {
//            return 'wrong credentials';
//        }
//    }
}


