<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{
    public function index()
    {
        return view('pages.app.settings');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:8'],
            'avatar'   => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ], [
            'name.required'  => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email'    => 'Format email tidak valid.',
            'email.unique'   => 'Email sudah digunakan akun lain.',
            'password.min'   => 'Password minimal 8 karakter.',
            'avatar.image'   => 'File harus berupa gambar.',
            'avatar.max'     => 'Ukuran gambar maksimal 2MB.',
        ]);

        $user->name  = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('avatar')) {
            $path        = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = asset('storage/' . $path);
        }

        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui.');
    }

    public function deleteAvatar()
    {
        $user         = Auth::user();
        $user->avatar = 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&background=14b8a6&color=fff&size=128';
        $user->save();

        return back()->with('success', 'Foto profil berhasil dihapus.');
    }
}
