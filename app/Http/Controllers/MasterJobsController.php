<?php

namespace App\Http\Controllers;

use App\Models\master_jobs;
use App\Models\logs;
use Illuminate\Http\Request;
use Auth;
use Carbon\carbon;

class MasterJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role_id == 1){
            $data["jobs"] = master_jobs::all();

            return view('admin.Master-Jobs.index' , $data);
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
       if(Auth::user()->role_id == 1){

        $validatedData = $request->validate([
            'name' => 'required|unique:master_jobs',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $create = master_jobs::create($validatedData);

        if($create){
            $user = auth::user()->id;
            $date = carbon::now();

            logs::create([
                'user_id' => $user,
                'date' => $date,
                'activity' => 'Menambahkan Data Kategori Pekerjaan : '.$request->name.' pada data MASTER KATEGORI PEKERJAAN',
            ]);
        }

        return redirect('/master_jobs')->with("success" , "Data Successfully ADDED");
           
        }else{
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\master_jobs  $master_jobs
     * @return \Illuminate\Http\Response
     */
    public function show(master_jobs $master_job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\master_jobs  $master_jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(master_jobs $master_job)
    {
        if(Auth::user()->role_id == 1){

            $data["item"] = $master_job;

            return view('admin.Master-Jobs.edit' , $data);
           
        }else{
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\master_jobs  $master_jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_jobs $master_job)
    {
        if(Auth::user()->role_id == 1){

            $validatedData = $request->validate([
                'name' => 'required|unique:master_jobs',
                'slug' => 'required',
                'status' => 'required',
            ]);

            $update = master_jobs::where('id' , $master_job->id)->update($validatedData);

            if ($update){
                $user = auth::user()->id ;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => 'Mengubah Kategori Pekerjaan : '.$master_job->name.' pada data MASTER KATEGORI PEKERJAAN',
                ]);
            }

            return redirect('/master_jobs')->with('success' , 'Data Successfully UPDATED');
           
        }else{
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\master_jobs  $master_jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_jobs $master_job)
    {
        if(Auth::user()->role_id == 1){
           $delete = master_jobs::destroy($master_job->id);

           if($delete){
                $user = auth::user()->id ;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => 'Menghapus Kategori Pekerjaan : '.$master_job->name.' pada data MASTER KATEGORI PEKERJAAN',
                ]);
           }

            return redirect('/master_jobs')->with('success' , 'Data Successfully UPDATED');

        }else{
            abort(403);
        }
    }
}
