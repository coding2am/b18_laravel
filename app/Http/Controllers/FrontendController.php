<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class FrontendController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('frontend.mainpage',compact('items'));
    }

    public function login()
    {
        return view('frontend.login');
    }
    
    public function register()
    {
        return view('frontend.register');
    }
}
