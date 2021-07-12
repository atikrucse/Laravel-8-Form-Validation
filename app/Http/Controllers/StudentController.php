<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function form(){
        return view('Pages.inputForm');
    }

    public function submitForm(Request $request){
        echo '<pre>';
        print_r($request-> input());
        echo '</pre>';

    }
}
