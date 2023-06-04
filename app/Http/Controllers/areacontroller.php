<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class areacontroller extends Controller
{
    public function index(){
        $states = DB::table('table_states')->pluck('name', 'id');
        $citys = DB::table('table_citys')->get();
        $area = DB::table('table_area')->get();
        return view('area.index', compact('states','citys','area'));
       }

       public function store(Request $request){
        // dd($request);
        DB::table('table_area')->insert([
            'area' => $request->area,
            'city' => $request->city,
            'state' => $request->State
        ]);

     return redirect()->route('area.index');
    }

    public function edit($request){
        $citys=DB::table('table_citys')->get();
        $area = DB::table('table_area')->find($request);
        $states = DB::table('table_states')->pluck('name', 'id');
          return view('area.edit',compact('citys','states','area'));
        }

        public function Update(Request $request,$id){
            $city = DB::table('table_area')->where('id', $id)->update(['area' => $request->area,
            'city' => $request->city,
            'state' => $request->State]);
            return redirect()->route('area.index');
           }

           public function delete($request)
           {
               DB::table('table_area')->where('id', $request)->delete();
               return back();
           }
}
