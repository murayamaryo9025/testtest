<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class ShopallController extends Controller
{
    public function index()
    {
        return view('shopall');
    }
}