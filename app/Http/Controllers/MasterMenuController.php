<?php

namespace App\Http\Controllers;

use App\Models\master_menu;
use App\Models\logs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Carbon\carbon;

class MasterMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth::user()->role_id == 1){
            $data["master_menu"] = master_menu::all();

            return view('admin.Master-Menu.index' , $data);
        }else{
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
        if(auth::user()->role_id == 1){

            $validatedData = $request->validate([
                'name' => 'required|unique:master_menus',
                'slug' => 'required',
                'status' => 'required',
            ]);

            $create = master_menu::create($validatedData);

            if($create){
                $user = auth::user()->role_id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => "Menambahkan Menu : ".$request->name." pada Master Data MENU",
                ]);
            }

            return redirect('/master_menu')->with("success" , "Data Successfully ADDED");
        }else{
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\master_menu  $master_menu
     * @return \Illuminate\Http\Response
     */
    public function show(master_menu $master_menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\master_menu  $master_menu
     * @return \Illuminate\Http\Response
     */
    public function edit(master_menu $master_menu)
    {
        if(auth::user()->role_id == 1){

            $data["item"] = $master_menu;

            return view('admin.Master-Menu.edit' , $data);
        }else{
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\master_menu  $master_menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_menu $master_menu)
    {
        if(auth::user()->role_id == 1){

             $validatedData = $request->validate([
                'name' => 'required|unique:master_menus',
                'slug' => 'required',
                'status' => 'required',
            ]);

            $create = master_menu::where('id' , $master_menu->id)->update($validatedData);

            if($create){
                $user = auth::user()->role_id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => "Melakukan Edit pada menu : ".$master_menu->name." pada Master Data MENU",
                ]);
            }
            
            return redirect('/master_menu')->with("success" , "Data Successfully UPDATED");
        }else{
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\master_menu  $master_menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_menu $master_menu)
    {
        if(auth::user()->role_id == 1){

            $delete = master_menu::destroy($master_menu->id);

            if($delete){
                $user = auth::user()->role_id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => "Menghapus menu : ".$master_menu->name." dari Master data MENU",
                ]);
            }

            return redirect('/master_menu')->with("success" , "Data Successfully DELETED");


        }else{
            abort(403);
        }
    }
}
