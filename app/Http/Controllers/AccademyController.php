<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class AccademyController extends Controller
{
    public function index()
    {
        $states = DB::table('table_states')->pluck('name', 'id');
        $citys = DB::table('table_citys')->get();
        $area = DB::table('table_area')->get();
        $academy = DB::table('table__accademy')->get();

        return view('Accademy.index',compact('states','citys','area','academy'));
    }

    public function store(Request $request){
        // dd($request);
        $imagePath = $request->image->store('images', 'public');

        DB::table('table__accademy')->insert([
            'name' => $request->name,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'State' => $request->State,
            'city' => $request->city,
            'area' => $request->area,
            'from_time' => $request->from_time,
            'to_time' => $request->to_time,
            'days' => implode(',', $request->days),
            'number' => $request->number,
            'email' => $request->email,
            'aboutus' => $request->aboutus,
            'image' => $imagePath,
        ]);



     return redirect()->route('Accademy.index');
    }

    public function edit($request){
        $academy = DB::table('table__accademy')->find($request);
        $states = DB::table('table_states')->pluck('name', 'id');
        $citys = DB::table('table_citys')->get();
        $area = DB::table('table_area')->get();
          return view('Accademy.edit',compact('academy','states','citys','area'));
        }
}

