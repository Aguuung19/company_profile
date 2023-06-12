<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use App\Models\logs;
use Auth;
use Carbon\Carbon;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) {
            $data["item"] = profile::first();

            return view("admin.Profile.index", $data);
        } else {
            abort(403);
        }
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
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profile $profile)
    {
        if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) {
                $validatedData = $request->validate([
                    'title' => 'required|max:255',
                    'vision' => 'required',
                    'mission' => 'required',
                    'organization_structure_title' => 'required',
                ]);

                $update = profile::where("id" , $profile->id)->update($validatedData);

                if ($update) {
                    $user = Auth::user()->id;
                    $date = carbon::now();

                    logs::create([
                        "user_id" => $user,
                        "date" => $date,
                        "activity" => "Melakukan UPDATE pada Profile Setting",
                    ]);
                }

                return redirect("/profile")->with("success" , "Data Successfully Updated");
        }else{
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
