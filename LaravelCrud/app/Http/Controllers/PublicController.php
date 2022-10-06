<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function landidnPage(){
       // die('sdfvsdfvcsdg');
        return view('welcome');
    }
    public function about(){
        // die('sdfvsdfvcsdg');
         return view('about');
     }
}
