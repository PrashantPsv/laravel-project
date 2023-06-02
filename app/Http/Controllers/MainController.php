<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function checklogin(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('main.successlogin');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function successlogin()
    {
        return view('welcome');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}
