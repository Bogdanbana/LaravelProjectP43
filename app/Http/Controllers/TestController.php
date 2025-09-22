<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function second()
    {
        $name = "Богдан";
        $arr = ["name" => "Богдан", "mark" => 4, "isAdmin" => true];
        return view('second', compact('name', 'arr'));
    }
    public function third()
    {
        return view('third');
    }
    public function homee()
    {
        return view('home');
    }
    public function arraycing()
    {
        return view('array');
    }
}
