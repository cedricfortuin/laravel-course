<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    protected function login(Request $request)
    {
        $request->validate([
           'name' => 'required|email',
           'password' => 'required|min:6'
        ]);

        if (!auth()->attempt($request->only('firstname', 'email', 'password'), $request->only('email'))) {
            Alert::toast('Fout opgetreden bij inloggen, probeer opnieuw.', 'error');
            return back();
        }

        return redirect()->route('admin.index');

    }

    protected function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
