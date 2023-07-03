<?php

namespace App\Http\Controllers;

use App\Models\master_jobs_status;
use App\Models\logs;
use Illuminate\Http\Request;
use Auth;
use Carbon\carbon;

class MasterJobStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth::user()->role_id == 1){
            $data["status"] = master_jobs_status::all();
            return view('admin.Master-Jobs-Status.index' , $data);
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
                'name' => 'required|unique:master_jobs_statuses',
                'status' => 'required',
            ]);

            $create = master_jobs_status::create($validatedData);

            if($create){
               $user = auth::user()->id; 
               $date = carbon::now();

               logs::create([
                'user_id' => $user,
                'date' => $date,
                'activity' => 'Menambah Data Status Pekerjaan : '.$request->name.' pada MASTER STATUS PEKERJAAN',
               ]);
            }

            return redirect('/master_jobs_status')->with("Data Successfully ADDED");
        }else{
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\master_jobs_status  $master_jobs_status
     * @return \Illuminate\Http\Response
     */
    public function show(master_jobs_status $master_jobs_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\master_jobs_status  $master_jobs_status
     * @return \Illuminate\Http\Response
     */
    public function edit(master_jobs_status $master_jobs_status)
    {
        if(auth::user()->role_id == 1){
            $data["item"] = $master_jobs_status;

            return view('admin.Master-Jobs-Status.edit' , $data);

        }else{
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\master_jobs_status  $master_jobs_status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_jobs_status $master_jobs_status)
    {
        if(auth::user()->role_id == 1){

            $validatedData = $request->validate([
                'name' => 'required|unique:master_jobs_statuses',
                'status' => 'required',
            ]);

            $update = master_jobs_status::where('id' , $master_jobs_status->id)->update($validatedData);

            if($update){
               $user = auth::user()->id; 
               $date = carbon::now();

               logs::create([
                'user_id' => $user,
                'date' => $date,
                'activity' => 'Mengedit Data Status Pekerjaan : '.$request->name.' pada MASTER STATUS PEKERJAAN',
               ]);
            }

            return redirect('/master_jobs_status')->with("Data Successfully UPDATED");


        }else{
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\master_jobs_status  $master_jobs_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_jobs_status $master_jobs_status)
    {
        if(auth::user()->role_id == 1){

            $destroy = master_jobs_status::destroy($master_jobs_status->id);

            if($destroy){
               $user = auth::user()->id; 
               $date = carbon::now();

               logs::create([
                'user_id' => $user,
                'date' => $date,
                'activity' => 'Menghapus Data Status Pekerjaan : '.$master_jobs_status->name.' dari MASTER STATUS PEKERJAAN',
               ]);
            }

            return redirect('/master_jobs_status')->with("Data Successfully DELETED");

        }else{
            abort(403);
        }
    }
}
