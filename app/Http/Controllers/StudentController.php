<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function form(){
        return view('Pages.inputForm');
    }

    public function submitForm(Request $request){
        $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "address" => "required"
        ],[
            // Manually pass Error message
            "name.required" => "You Can't leave name field empty",
            "email.required" => "Email must needed"
        ]);
        echo '<pre>';
        print_r($request-> input());
        echo '</pre>';

    }
}
