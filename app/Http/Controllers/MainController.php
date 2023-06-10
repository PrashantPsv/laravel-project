<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function checklogin(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])){

            return redirect()->route('main.successlogin');

        } elseif (Auth::guard('teachers')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {

            // Teacher authentication successful
            return redirect()->route('main.teacherlogin');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function successlogin()
    {
        return view('welcome');
    }

    public function teacherlogin()
    {
        return view('teachers');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect()->route('logout');
    }
}
