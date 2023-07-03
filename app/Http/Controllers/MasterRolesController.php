<?php

namespace App\Http\Controllers;

use App\Models\master_role;
use App\Models\logs;
use Illuminate\Http\Request;
use Auth;
use Carbon\carbon;

class MasterRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth::user()->role_id == 1){
            $data["role"] = master_role::latest()->get();

            return view('admin.Master-Role.index' , $data);

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

            $validateData = $request->validate([
                'role' => 'required|unique:master_roles',
                'status' => 'required',
            ]);

            $create = master_role::create($validateData);

            if($create){
                $user = auth::user()->id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => "Menambahkan data ROLE : ".$request->role." pada data MASTER ROLES",
                ]);
            }

            return redirect('/master_roles')->with("success" , "Data Successfully ADDED");
        }else{
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\master_role  $master_role
     * @return \Illuminate\Http\Response
     */
    public function show(master_role $master_role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\master_role  $master_role
     * @return \Illuminate\Http\Response
     */
    public function edit(master_role $master_role)
    {
        if(auth::user()->role_id == 1){
            $data["item"] = $master_role;

            return view('admin.Master-Role.edit', $data);
        }else{
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\master_role  $master_role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_role $master_role)
    {
        if(auth::user()->role_id == 1){
            $validateData = $request->validate([
                'role' => 'required|unique:master_roles',
                'status' => 'required',
            ]);

            $update = master_role::where('id' , $master_role->id)->update($validateData);

            if($update){
                $user = auth::user()->id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => "Mengedit Role : ".$master_role->role." pada data MASTER ROLE",
                ]);
            }

        return redirect('/master_roles')->with("success" , "ROLE Successfully UPDATED");


        }else{
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\master_role  $master_role
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_role $master_role)
    {
        if(auth::user()->role_id == 1){

            $destroy = master_role::destroy($master_role->id);

            if($destroy){
                $user = auth::user()->id;
                $date =carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => 'Menghapus Data Role : '.$master_role->role.' dari data MASTER ROLE',
                ]);
            }
        
            return redirect('/master_roles')->with("success" , "Role Successfully DELETED");

        }else{
            abort(403);
        }
    }
}
