<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\landing_page;

class ViewController extends Controller
{
    //

    public function index()
    {
        $data["item"] = landing_page::first();

        return view("main.landingpage", $data);
    }
}
