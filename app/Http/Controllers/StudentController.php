<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function getStudent(){
        return view("students");
    }
}
public function Student(Request $request){
    $validate = Validator::make($request->all(),[
        "name" => "required",
        "email" => "required",
        "phone" => "required"
    ],[
        "name.required" => "A név mező kötelező!"
    ]);
    if( $validate->fails() ) {

        return redirect( "uj-tanulo" )->withErrors( $validate )->withInput();
    }
    print_r( $request->all() );
}