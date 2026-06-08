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
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required|digits:12',
            'username' => 'required',
            'password' => 'required|min:8|confirmed'
        ],[
            'nama.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi.',
            'nomor_telepon.digits' => 'Nomor telepon harus 12 digit.',
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.'
        ]);

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
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.'
        ]);

        $user = User::where(
            'username',
            $request->username
        )->first();

        // akun ditemukan tapi nonaktif
        if($user && $user->status == 'nonaktif'){

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Akun Anda telah dinonaktifkan.'
                );
        }

        // login normal
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])){

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

        return back()
            ->withInput()
            ->with(
                'error',
                'Username atau password salah.'
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
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required|digits:12',
            'username' => 'required',
            'password' => 'required|min:8',
            'role' => 'required'
        ],[
            'nama.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi.',
            'nomor_telepon.digits' => 'Nomor telepon harus 12 digit.',
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'role.required' => 'Role wajib dipilih.'
        ]);

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
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required|digits:12',
            'username' => 'required',
            'role' => 'required',
            'password' => 'nullable|min:8'
        ],[
            'nama.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi.',
            'nomor_telepon.digits' => 'Nomor telepon harus 12 digit.',
            'username.required' => 'Username wajib diisi.',
            'role.required' => 'Role wajib dipilih.',
            'password.min' => 'Password minimal 8 karakter.'
        ]);

        $user = User::findOrFail($id);

        $user->update([

            'nama' => $request->nama,

            'email' => $request->email,

            'nomor_telepon' => $request->nomor_telepon,

            'username' => $request->username,

            'role' => $request->role,

            'status' => $request->status,

        ]);

        if(
            $user->role == 'admin' &&
            !empty($request->password)
        ){
            return back()->with(
                'error',
                'Password akun admin tidak dapat diubah.'
            );
        }

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