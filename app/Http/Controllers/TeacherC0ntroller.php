<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeacherC0ntroller extends Controller
{
    public function index(){
        $teachers = DB::table('table__teacher')->get();

        return view('teacher.index',compact('teachers'));
       }

       public function store(Request $request){
        // dd($request);
        DB::table('table__teacher')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'lastname' => $request->lastname,
            'type' => 'Teacher',
        ]);

     return redirect()->route('addTeacher.index');
    }

    public function edit($request){
        $teacher = DB::table('table__teacher')->find($request);
          return view('teacher.edit',compact('teacher'));
        }

        public function Update(Request $request,$id){
            $city = DB::table('table__teacher')->where('id', $id)->update(['name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'lastname' => $request->lastname]);
            return redirect()->route('addTeacher.index');
           }

           public function delete($request)
           {
               DB::table('table__teacher')->where('id', $request)->delete();
               return back();
           }
}
