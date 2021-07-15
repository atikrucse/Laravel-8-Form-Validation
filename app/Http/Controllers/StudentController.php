<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TestRequest;

use App\Models\Student;

class StudentController extends Controller
{
    public function form(){
        return view('Pages.inputForm');
    }

    // public function submitForm(Request $request){
    //     // $this->validate($request, [
    //     //     "name" => "required",
    //     //     "email" => "required",
    //     //     "address" => "required"
    //     // ],[
    //     //     // Manually pass Error message
    //     //     "name.required" => "You Can't leave name field empty",
    //     //     "email.required" => "Email must needed"
    //     // ]);
    //     echo '<pre>';
    //     print_r($request-> input());
    //     echo '</pre>';

    // }

    //Method-3 Using Requests files
    public function submitForm(TestRequest $request){
        $std = new Student();

        $std->name = $request->name;
        $std->email = $request->email;
        $std->address = $request->address;

        $std->save();

        // echo '<pre>';
        // print_r($request-> all());
        // echo '</pre>';
    
    }
}
