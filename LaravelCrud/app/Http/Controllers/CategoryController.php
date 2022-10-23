<?php

namespace App\Http\Controllers;

use App\Models\category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();

        return view('category',[
            'data' => $categories
        ]);
    }
}
