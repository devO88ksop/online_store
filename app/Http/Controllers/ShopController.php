<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function shop(){

    }
    public function product(){

    }
    public function checkout(){
    }
}
