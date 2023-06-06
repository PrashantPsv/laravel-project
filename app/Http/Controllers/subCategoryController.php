<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class subCategoryController extends Controller
{
    public function index(){
        $Categorys = DB::table('table__category')->pluck('name', 'id');
        $table_sub_category = DB::table('table_sub_category')->get();
        return view('subCategory.index', compact('Categorys','table_sub_category'));
       }

       public function store(Request $request){
        // dd($request);
        DB::table('table_sub_category')->insert([
            'name' => $request->name,
            'Category' => $request->Category
        ]);

     return redirect()->route('subCategory.index');
    }

    public function edit($request){
        $table_sub_category=DB::table('table_sub_category')->find($request);
        $category = DB::table('table__category')->pluck('name', 'id');
          return view('subCategory.edit',compact('category','table_sub_category'));
        }

        public function Update(Request $request,$id){
            $city = DB::table('table_sub_category')->where('id', $id)->update(['name' => $request->name,
            'Category' => $request->Category]);
            return redirect()->route('subCategory.index');
           }

           public function delete($request)
           {
               DB::table('table_sub_category')->where('id', $request)->delete();
               return back();
           }

}
