<?php

namespace App\Http\Controllers;

use App\Models\master_categories;
use App\Models\master_menu;
use App\Models\logs;
use Illuminate\Http\Request;
use Auth;
use Carbon\carbon;

class MasterCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role_id == 1){
            $data["category"] = master_categories::with(['master_menu'])->get();
            $data["menu"] = master_menu::where('status' , 1)->get();

            return view("admin.Master-Category.index" , $data);
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
                'name' => 'required|unique:master_categories',
                'slug' => 'required|unique:master_categories',
                'menu_id' => 'required',
                'status' => 'required',
            ]);

            $create = master_categories::create($validatedData);

            if($create){
                $user = auth::user()->id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => "Menambahkan Kategori : ".$request->name." kedalam Menu : ".$request->menu_id." pada data MASTER CATEGORY",
                ]);
            }

            return redirect("/master_category")->with("success" , "Category Successfully ADDED");
        }else{
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\master_categories  $master_categories
     * @return \Illuminate\Http\Response
     */
    public function show(master_categories $master_categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\master_categories  $master_categories
     * @return \Illuminate\Http\Response
     */
    public function edit(master_categories $master_category)
{
    if (auth::user()->role_id == 1) {
        $data["item"] = $master_category;
        $data["menu"] = master_menu::where('status', 1)->get();

        return view('admin.Master-Category.edit', $data);
    } else {
        abort(403);
    }
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\master_categories  $master_categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_categories $master_category)
    {
       if (auth::user()->role_id == 1) {

         $validatedData = $request->validate([
                'name' => 'required|unique:master_categories',
                'slug' => 'required|unique:master_categories',
                'menu_id' => 'required',
                'status' => 'required',
            ]);

            $update = master_categories::where('id' , $master_category->id)->update($validatedData);

            if($update){
                $user = auth::user()->id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => "Mengedit Kategori : ".$master_category->name." dengan Menu : ".$master_category->menu_id." pada data MASTER CATEGORY",
                ]);
            }
       
        return redirect('/master_category')->with("success" , "Category Successfully UPDATED");
    } else {
        abort(403);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\master_categories  $master_categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_categories $master_category)
    {
        if (auth::user()->role_id == 1) {

            $delete = master_categories::destroy($master_category->id);

            if($delete){
                $user = auth::user()->id;
                $date = carbon::now();

                logs::create([
                    'user_id' => $user,
                    'date' => $date,
                    'activity' => "Menghapus Kategori : ".$master_category->name." dengan Menu : ".$master_category->menu_id." pada data MASTER CATEGORY",
                ]);
            }

            return redirect('/master_category')->with("success" , "Category Successfully DELETED");

        }else{
            abort(403);
        }
    }
}
