<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public function home() {
        return view('/login');
    }


    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->age = $request->age;
        $img=Image::make($request->file('image'));
        $filename=$request->file('image')->getClientOriginalName();
        $img->save('storage/image/'.$filename);
        $student->save();
        return 'Saved';

        $filenameWithExt = $request->file('image')->getClientOriginalName();
    }



    public function update(Request $request){
        $student = Student::where('id',$request->id)->first();
        $student->name =$request->$name;
    $student->age =$request->$age;
    $student->location =$request->$location;
    $student->dob =$request->$dob;
    $student->save();
    return redirect('/list');


}


    public function delete($id){
        Student::where('id',$id) ->delete();
        return redirect('/list');
    }


public function login(){
    $student = Student::get();
    return view('login');
}

    public function loginForm(Request $request) {
        $credentials = [
            'email'=> $request->username,
            'password'=> $request->password
        ];
        if(Auth::attempt($credentials)){
            return redirect('/home'); } else{
            return 'wrong credentials';
        }
    }
public function static(){
        return view('static');
}
}






