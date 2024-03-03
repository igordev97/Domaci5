<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index()
    {
        $title = "Home";
        $currentHour = date("H");
        $currentTime = date("H:i:s");

        return view("welcome",compact("title","currentTime","currentHour"));

    }
}