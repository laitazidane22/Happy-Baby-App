<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\User;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index(){
        return view('registrasi');
    }

    Public function authenticate(Request $request){
        $validasiData = $request->validate([
            // 'kolom tbl' => ''
            'username' => 'required|max:20|unique:users',
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:50',
            'password_confirmation' => 'required|same:password',
            'no_telp' => 'required|min:12|max:12'
        ]);

        
        $dataUser = new User([
            'username' => $request->username,
            'email' => $request->email ,
            'password' => Hash::make( $request-> password),
            'no_telp' => $request-> no_telp
        ]);
        // insert ke db
        // User::create($dataUser); (bisa juga pake ini)
        $dataUser->save();
        return redirect()->route('login')->with('succes','Registrasi Berhasil. Silahkan Login!');

    }
}
