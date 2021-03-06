<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index',[
           'categories'=>Category::all(),
        ]);

        // return view('welcome');
    }
    public function show()
    {
        return view('show');

        // return view('welcome');
    }
}
