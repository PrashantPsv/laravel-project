<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TeacherC0ntroller extends Controller
{
    public function index()
    {
        $teachers = DB::table('table__teacher')->get();
        $subCategorys = DB::table('table_sub_category')->pluck('name', 'id');

        return view('teacher.index', compact('teachers', 'subCategorys'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:table__teacher,email',
            'phone' => 'required',
            'lastname' => 'required',
            'Category' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        DB::table('table__teacher')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'lastname' => $request->lastname,
            'type' => $request->Category,
            'password' => bcrypt($request->phone),

        ]);

        return redirect()->route('addTeacher.index');
    }

    public function edit($request)
    {
        $teacher = DB::table('table__teacher')->find($request);
        $subCategorys = DB::table('table_sub_category')->pluck('name', 'id');

        return view('teacher.edit', compact('teacher', 'subCategorys'));
    }

    public function Update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:table__teacher,email,',
            'phone' => 'required',
            'lastname' => 'required',
            'Category' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $city = DB::table('table__teacher')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'lastname' => $request->lastname,
                'type' => $request->Category,
                'password' => bcrypt($request->phone),
            ]);

        if ($city) {
            // Update successful
            return redirect()->route('addTeacher.index');

        } else {
            // Update failed
            return back()->with('error', 'Failed to update teacher');
        }

    }

    public function delete($request)
    {
        DB::table('table__teacher')->where('id', $request)->delete();
        return back();
    }
}
