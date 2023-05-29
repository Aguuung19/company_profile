<?php

namespace App\Http\Controllers;

use App\Models\landing_page;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.Landing-Page.index");
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\landing_page  $landing_page
     * @return \Illuminate\Http\Response
     */
    public function show(landing_page $landing_page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\landing_page  $landing_page
     * @return \Illuminate\Http\Response
     */
    public function edit(landing_page $landing_page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\landing_page  $landing_page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, landing_page $landing_page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\landing_page  $landing_page
     * @return \Illuminate\Http\Response
     */
    public function destroy(landing_page $landing_page)
    {
        //
    }
}
