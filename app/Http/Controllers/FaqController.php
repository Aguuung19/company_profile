<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\logs;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            $data["faq"] = faq::all();

            return view("admin.faq.index" ,$data);
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
        if(auth::user()->role_id == 1 || auth::user()->role_id == 2){

            $validatedData = $request->validate([
                'question' => 'required',
                'answer' => 'required',
                'status' => 'required',
            ]);

            $create = faq::create($validatedData);

            if($create){
                $user = auth::user()->role_id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => 'Menambahkan Pertanyaan : '.$request->question.' ke data FAQ',
                ]);
            }

            return redirect('/faq')->with("success" , "Data Successfully ADDED");
        }else{
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(faq $faq)
    {
        if (auth::user()->role_id == 1 || auth::user()->role_id == 2){
            $data["item"] = faq::where('id' , $faq->id)->first();

            return view('admin.faq.edit' , $data);
        }else{
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faq $faq)
    {
        if (auth::user()->role_id == 1 || auth::user()->role_id == 2){

            $validatedData = $request->validate([
                'question' => 'required',
                'answer' => 'required',
                'status' => 'required',
            ]);

            $update = faq::where("id" , $faq->id)->update($validatedData);

            if($update){
                $user = Auth::user()->role_id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => "Melakukan Edit Pada Pertanyaan : ".$request->question." pada data FAQ",
                ]);
            }

            return redirect('/faq')->with('success' , 'Data Successfully Updated');
        }else{
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(faq $faq)
    {
        if (auth::user()->role_id == 1 || auth::user()->role_id == 2){

            $delete = faq::destroy($faq->id);

            if($delete){
                $user = auth::user()->role_id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => "Menghapus Pertanyaan : ".$faq->question." dari data FAQ",
                ]);
            }

            return redirect('/faq')->with('success' , 'Data Successfully DELETED');
        }else{
            abort(403);
        }
    }
}
