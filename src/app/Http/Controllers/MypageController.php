<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class MypageController extends Controller{
    public function index(Request $request)
    {
        return view('mypage');
    }
}