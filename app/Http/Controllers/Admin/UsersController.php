<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User as UserMod;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       /* $mods = UserMod::all();
        foreach ($mods as $item) {
            echo $item->name;
        }*/
        // $mods = UserMod::all();
       /* $mods = UserMod::where('active', 1)
                ->where('city','bangkok')
               ->orderBy('name', 'desc')
               //->take(10)
               ->get();


          foreach ($mods as $item) {
            echo $item->name."<text>&nbsp&nbsp&nbsp&nbsp<text> ".$item->surname."<br />";
        }*/
        $count = UserMod::where('active', 1)->count();
        echo "<br>". $count ;



       // return "ToT <text>&nbsp<text> LoL";

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mod = UserMod::find($id);
        echo $mod->name." ".$mod->password;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
