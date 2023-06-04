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

   public function edit($request){
   $state=DB::table('table_states')->find($request);
     return view('stateEdit',compact('state'));
   }

   public function Update(Request $request,$id){
    $state = DB::table('table_states')->where('id', $id)->update(['name' => $request->name]);
    return redirect()->route('state.index');
   }

   public function delete($request)
   {
       DB::table('table_states')->where('id', $request)->delete();
       return back();
   }

}
