<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class cityController extends Controller
{
    public function index(){
        $states = DB::table('table_states')->pluck('name', 'id');
        $citys = DB::table('table_citys')->get();
        return view('city.index', compact('states','citys'));
       }

       public function store(Request $request){
        // dd($request);
        DB::table('table_citys')->insert([
            'name' => $request->name,
            'state' => $request->State
        ]);

     return redirect()->route('city.index');
    }

    public function edit($request){
        $city=DB::table('table_citys')->find($request);
        $states = DB::table('table_states')->pluck('name', 'id');
          return view('city.edit',compact('city','states'));
        }

        public function Update(Request $request,$id){
            $city = DB::table('table_citys')->where('id', $id)->update(['name' => $request->name,
            'state' => $request->State]);
            return redirect()->route('city.index');
           }

           public function delete($request)
           {
               DB::table('table_citys')->where('id', $request)->delete();
               return back();
           }

}
