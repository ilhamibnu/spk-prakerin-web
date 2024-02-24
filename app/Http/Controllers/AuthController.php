<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AuthController extends Controller
{

    public function indexlogin()
    {
        return view('admin.pages.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi!',
            'password.required' => 'Password harus diisi!'
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard')->with('login', 'Login berhasil!');
        }

        return redirect('/login')->with('error', 'Username atau Password salah!');
    }

    public function updateprofil(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            if ($request->password != $request->repassword) {
                return redirect('/dashboard')->with('error', 'Password tidak sama!');
            }
            $user->password = bcrypt($request->password);
        }
        $user->update();

        return redirect('/dashboard')->with('updateprofil', 'Profil berhasil diupdate!');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login')->with('logout', 'Logout berhasil!');
    }
}
