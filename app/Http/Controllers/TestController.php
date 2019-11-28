<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        $name = ['Pankaj', 'Ajay', 'Vijay', 'Mahesh'];
        $marks = [20, 30, 40, 50];
        //return view("testview")->with(["mydata" => $name, "marks" => $marks]);
        return view("testview")->withname($name)->withmarks($marks);
    }
    public function showView()
    {
        return view("testview2");
    }
}
