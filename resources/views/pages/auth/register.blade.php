@extends('layouts.auth')
@section('content')
  <div id="loginPage" class="min-h-screen flex items-center justify-center p-4 medical-pattern">
    <div class="w-full max-w-md animate-scale-in">
      <div
        class="bg-white dark:bg-surface-900 rounded-3xl p-8 shadow-2xl shadow-medical-500/10 border border-surface-200 dark:border-surface-800">
        <!-- Logo -->
        <div class="text-center mb-8">
          <div
            class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-medical-500 to-medical-700 flex items-center justify-center shadow-lg shadow-medical-500/30 mb-4">
            <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
          </div>
          <h1 class="font-display text-2xl font-bold tracking-tight">Medi<span class="text-medical-500">Care</span></h1>
          <p class="text-sm text-surface-500 mt-1">Patient Monitoring System</p>
        </div>

        <!-- Register Form -->
        <form class="space-y-4" action="{{ route('register.post') }}" method="POST">
          @csrf
          <div>
            <label id="name" class="block text-sm font-medium mb-2">Nama Lengkap</label>
            <input type="text" id="name" name="name"
              class="w-full px-4 py-3 rounded-xl bg-surface-50 dark:bg-surface-800 border border-surface-200 dark:border-surface-700 focus:border-medical-500 outline-none transition-colors"
              placeholder="John Doe" value="{{ old('name') }}">
            @error('name')
              <small class="text-red-500 font-light">{{ $message }}</small>
            @enderror
          </div>
          <div>
            <label id="email" class="block text-sm font-medium mb-2">Email</label>
            <input type="email" id="email" name="email"
              class="w-full px-4 py-3 rounded-xl bg-surface-50 dark:bg-surface-800 border border-surface-200 dark:border-surface-700 focus:border-medical-500 outline-none transition-colors"
              placeholder="email@example.com" value="{{ old('email') }}">
            @error('email')
              <small class="text-red-500 font-light">{{ $message }}</small>
            @enderror
          </div>
          <div>
            <label id="password" class="block text-sm font-medium mb-2">Password</label>
            <input type="password" id="password" name="password"
              class="w-full px-4 py-3 rounded-xl bg-surface-50 dark:bg-surface-800 border border-surface-200 dark:border-surface-700 focus:border-medical-500 outline-none transition-colors"
              placeholder="********">
            @error('password')
              <small class="text-red-500 font-light">{{ $message }}</small>
            @enderror
          </div>

          <div>
            <label id="confirm_password" class="block text-sm font-medium mb-2">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="confirm_password"
              class="w-full px-4 py-3 rounded-xl bg-surface-50 dark:bg-surface-800 border border-surface-200 dark:border-surface-700 focus:border-medical-500 outline-none transition-colors"
              placeholder="********">
            @error('password_confirmation')
              <small class="text-red-500 font-light">{{ $message }}</small>
            @enderror
          </div>

          <button type="submit"
            class="w-full py-3.5 bg-gradient-to-r from-medical-500 to-medical-600 hover:from-medical-600 hover:to-medical-700 text-white font-semibold rounded-xl transition-all shadow-lg shadow-medical-500/25 active:scale-[0.98]">
            Daftar
          </button>
        </form>

        <p class="text-center text-sm text-surface-500 mt-6">
          Sudah memiliki akun?
          <a href="{{ route('login') }}" class="text-medical-500 hover:underline font-medium">Masuk sekarang</a>
        </p>
      </div>
    </div>
  </div>
@endsection
