<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        $subCategory = DB::table('table_sub_category')->pluck('name', 'id');
        $level = DB::table('level')->pluck('name', 'id');
        $language = DB::table('language')->pluck('name', 'id');
        $booking = DB::table('table__booking')->get();
        return view('Teachers.booking.index', compact('subCategory', 'language', 'level','booking'));
    }

    public function store(Request $request)
    {
        // dd($request);
        DB::table('table__booking')->insert([
            'Category' => $request->Category,
            'level' => $request->level,
            'language' => $request->language,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'spot' => $request->spot,
            'days' =>  $request->days,
            'start_date' => $request->start_date,
            'sun_start_time' => $request->sun_start_time,
            'mon_start_time' => $request->mon_start_time,
            'tue_start_time' => $request->tue_start_time,
            'wed_start_time' => $request->wed_start_time,
            'thu_start_time' => $request->thu_start_time,
            'fri_start_time' => $request->fri_start_time,
            'sat_start_time' => $request->sat_start_time,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'sun_end_time' => $request->sun_end_time,
            'mon_end_time' => $request->mon_end_time,
            'tue_end_time' => $request->tue_end_time,
            'wed_end_time' => $request->wed_end_time,
            'thu_end_time' => $request->thu_end_time,
            'fri_end_time' => $request->fri_end_time,
            'sat_end_time' => $request->sat_end_time,
        ]);

        return redirect()->route('booking.index');
    }

    public function edit($request)
    {
        $booking = DB::table('table__booking')->find($request);
        $subCategory = DB::table('table_sub_category')->pluck('name', 'id');
        $level = DB::table('level')->pluck('name', 'id');
        $language = DB::table('language')->pluck('name', 'id');
        return view('Teachers.booking.edit', compact('booking', 'subCategory', 'level','language'));
    }

    public function Update(Request $request, $id)
    {
        $city = DB::table('table__booking')->where('id', $id)->update(['Category' => $request->Category,
        'level' => $request->level,
        'language' => $request->language,
        'description' => $request->description,
        'price' => $request->price,
        'duration' => $request->duration,
        'spot' => $request->spot,
        'days' =>  $request->days,
        'start_date' => $request->start_date,
        'sun_start_time' => $request->sun_start_time,
        'mon_start_time' => $request->mon_start_time,
        'tue_start_time' => $request->tue_start_time,
        'wed_start_time' => $request->wed_start_time,
        'thu_start_time' => $request->thu_start_time,
        'fri_start_time' => $request->fri_start_time,
        'sat_start_time' => $request->sat_start_time,
        'end_date' => $request->end_date,
        'start_time' => $request->start_time,
        'end_time' => $request->end_time,
        'sun_end_time' => $request->sun_end_time,
        'mon_end_time' => $request->mon_end_time,
        'tue_end_time' => $request->tue_end_time,
        'wed_end_time' => $request->wed_end_time,
        'thu_end_time' => $request->thu_end_time,
        'fri_end_time' => $request->fri_end_time,
        'sat_end_time' => $request->sat_end_time,
        ]);
        return redirect()->route('booking.index');
    }

    public function delete($request)
    {
        DB::table('table__booking')->where('id', $request)->delete();
        return back();
    }
}
