<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerPelanggan(Request $request)
    {
        User::create([

            'nama' => $request->nama,

            'email' => $request->email,

            'nomor_telepon' => $request->nomor_telepon,

            'username' => $request->username,

            'password' => Hash::make($request->password),

            'role' => 'pelanggan',

            'status' => 'aktif'

        ]);

        return redirect('/login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if(Auth::attempt($credentials)){

        $request->session()->regenerate();

        $user = Auth::user();

        if($user->role == 'admin'){
            return redirect('/admin');
        }

        elseif($user->role == 'kasir'){
            return redirect('/kasir');
        }

        elseif($user->role == 'dapur'){
            return redirect('/dapur');
        }

        else{
            return redirect('/pelanggan');
        }

    }

    return back()->with(
        'error',
        'Username atau password salah'
    );
}

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
}

public function store(Request $request)
{
    User::create([

        'nama' => $request->nama,

        'email' => $request->email,

        'nomor_telepon' => $request->nomor_telepon,

        'username' => $request->username,

        'password' => Hash::make($request->password),

        'role' => $request->role,

        'status' => 'aktif',

    ]);

    return redirect('/admin');
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $user->update([

        'nama' => $request->nama,

        'email' => $request->email,

        'nomor_telepon' => $request->nomor_telepon,

        'username' => $request->username,

        'role' => $request->role,

        'status' => $request->status,

    ]);

    if($request->password){

        $user->update([

            'password' => Hash::make($request->password)

        ]);

    }

    return redirect('/admin');
}

public function destroy($id)
{
    $user = User::findOrFail($id);

    $user->delete();

    return redirect()->back();
}

}