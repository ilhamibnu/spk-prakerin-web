<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('id_role', '2')->get();
        return view('admin.pages.data-user', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:tb_user',
            'password' => 'required',
            'repassword' => 'required|same:password'
        ], [
            'name.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'email.unique' => 'Email sudah terdaftar!',
            'password.required' => 'Password harus diisi!',
            'repassword.required' => 'Konfirmasi password harus diisi!',
            'repassword.same' => 'Konfirmasi password tidak sama!'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'id_role' => 2
        ]);

        return redirect('/data-user')->with('store', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        if ($request->password) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:tb_user,email,' . $id,
                'password' => 'required',
                'repassword' => 'required|same:password'
            ], [
                'name.required' => 'Nama harus diisi!',
                'email.required' => 'Email harus diisi!',
                'email.unique' => 'Email sudah terdaftar!',
                'password.required' => 'Password harus diisi!',
                'repassword.required' => 'Konfirmasi password harus diisi!',
                'repassword.same' => 'Konfirmasi password tidak sama!'
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:tb_user,email,' . $id
            ], [
                'name.required' => 'Nama harus diisi!',
                'email.required' => 'Email harus diisi!',
                'email.unique' => 'Email sudah terdaftar!'
            ]);
        }

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'id_role' => 2
        ]);

        return redirect('/data-user')->with('update', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/data-user')->with('destroy', 'Data berhasil dihapus!');
    }
}
