<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class stateController extends Controller
{
   public function index(){
    $states = DB::table('table_states')->pluck('name', 'id');
    return view('stateIndex', compact('states'));
   }

   public function store(Request $request){
    // dd($request);
    DB::table('table_states')->insert([
        'name' => $request->name
    ]);

     return redirect()->route('state.index');
   }
}
