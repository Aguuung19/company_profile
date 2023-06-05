<?php

namespace App\Http\Controllers;

use App\Models\footer_link;
use App\Models\logs;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "title" => "required",
            "section" => "required",
            "link" => "required",
            "target" => "required",
        ]);

        $store = footer_link::create($validateData);

        if ($store) {
            $user = Auth::user()->id;
            $date = carbon::now();

            logs::create([
                "user_id" => $user,
                "date" => $date,
                "activity" =>
                    "Menambahkan Footer Link ke section " .
                    $validateData["section"] .
                    " dengan nama " .
                    $validateData["title"] .
                    " dan link " .
                    $validateData["link"],
            ]);
        }

        return redirect("/landing_page")->with(
            "success",
            "Footer Link Successfully Added"
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\footer_link  $footer_link
     * @return \Illuminate\Http\Response
     */
    public function show(footer_link $footer_link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\footer_link  $footer_link
     * @return \Illuminate\Http\Response
     */
    public function edit(footer_link $footer_link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\footer_link  $footer_link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, footer_link $footer_link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\footer_link  $footer_link
     * @return \Illuminate\Http\Response
     */
    public function destroy(footer_link $footer_link)
    {
        $delete = footer_link::destroy($footer_link->id);

        if ($delete) {
            $user = Auth::user()->id;
            $date = carbon::now();
            logs::create([
                "user_id" => $user,
                "date" => $date,
                "activity" =>
                    "Menghapus Footer Link pada " .
                    $footer_link->section .
                    " dengan nama " .
                    $footer_link->section .
                    " dan link " .
                    $footer_link->link,
            ]);
        }

        return redirect("/landing_page")->with(
            "success",
            "Footer Link Successfully Deleted"
        );
    }
}
