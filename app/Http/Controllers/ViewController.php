<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\landing_page;
use App\Models\profile;
use App\Models\faq;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    //

    public function index()
    {
        $data["item"] = landing_page::first();
        $data["faq"] = faq::where('status' , 1)->get();

        return view("main.landingpage", $data);
    }

    public function visiMisi(){
        $data["item"] = profile::first();

        return view("main.pages.visionAndMission" ,$data);
    }

    public function organisasi(){
        $data["item"] = profile::first();
        return view("main.pages.organizationalStructure" ,$data);
    }

    public function faq(){
        $data["faq"] = faq::where('status' , 1)->get();
        return view("main.pages.faq" , $data);
    }


}
