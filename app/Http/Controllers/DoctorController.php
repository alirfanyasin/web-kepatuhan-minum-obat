<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors =  User::role('doctor')
            ->orderBy('name', 'asc')
            ->get();

        return view('pages.app.doctor', compact('doctors'));
    }

    public function create()
    {
        return view('pages.app.doctor-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ], [
            'name.required'     => 'Nama lengkap wajib diisi.',
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Format email tidak valid.',
            'email.unique'      => 'Email sudah digunakan.',
            'password.required' => 'Password wajib diisi.',
            'password.min'      => 'Password minimal 8 karakter.',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'avatar'   => 'https://ui-avatars.com/api/?name=' . urlencode($request->name) . '&background=14b8a6&color=fff&size=128',
        ]);

        $user->assignRole('doctor');

        return redirect()->route('doctor.index')->with('success', 'Akun dokter berhasil dibuat.');
    }
}
