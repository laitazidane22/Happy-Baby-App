<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function proses_login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email:dns',
                'password' => 'required',
            ],[
                'email.required' => 'Email wajib di isi',
                'password.required' => 'Password wajib di isi',
            ]);

        $kredensil = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        echo Auth::attempt($kredensil);

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->hak_akses == 'admin') {
                    return redirect()->intended('admin');
                } elseif ($user->hak_akses == 'customer') {
                    return redirect()->intended('index');
                }
                return redirect()->intended('/');
            }

        return redirect('login')->withInput()->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login')->with('Logout', 'logout berhasil');
    }
}
