<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function index(){
        $Category = DB::table('table__category')->pluck('name', 'id');
        return view('Category.index', compact('Category'));
       }

       public function store(Request $request){
        // dd($request);
        DB::table('table__category')->insert([
            'name' => $request->name
        ]);

         return redirect()->route('Category.index');
       }

       public function edit($request){
       $Category=DB::table('table__category')->find($request);
         return view('Category.edit',compact('Category'));
       }

       public function Update(Request $request,$id){
        $state = DB::table('table__category')->where('id', $id)->update(['name' => $request->name]);
        return redirect()->route('Category.index');
       }

       public function delete($request)
       {
           DB::table('table__category')->where('id', $request)->delete();
           return back();
       }

}
