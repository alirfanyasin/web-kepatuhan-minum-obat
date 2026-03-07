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

        <!-- Login Form -->
        <form onsubmit="handleLogin(event)" class="space-y-4">
          <div>
            <label class="block text-sm font-medium mb-2">Email</label>
            <input type="email" id="loginEmail" required
              class="w-full px-4 py-3 rounded-xl bg-surface-50 dark:bg-surface-800 border border-surface-200 dark:border-surface-700 focus:border-medical-500 outline-none transition-colors"
              placeholder="email@example.com">
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Password</label>
            <input type="password" id="loginPassword" required
              class="w-full px-4 py-3 rounded-xl bg-surface-50 dark:bg-surface-800 border border-surface-200 dark:border-surface-700 focus:border-medical-500 outline-none transition-colors"
              placeholder="********">
          </div>

          {{-- <div>
            <label class="block text-sm font-medium mb-2">Masuk sebagai</label>
            <div class="grid grid-cols-2 gap-3">
              <label class="relative cursor-pointer">
                <input type="radio" name="role" value="nakes" class="peer sr-only" checked>
                <div
                  class="p-4 rounded-xl border-2 border-surface-200 dark:border-surface-700 peer-checked:border-medical-500 peer-checked:bg-medical-500/5 transition-all text-center">
                  <svg class="w-8 h-8 mx-auto mb-2 text-medical-500" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="font-semibold text-sm">Nakes</span>
                  <p class="text-xs text-surface-500 mt-1">Tenaga Kesehatan</p>
                </div>
              </label>
              <label class="relative cursor-pointer">
                <input type="radio" name="role" value="pasien" class="peer sr-only">
                <div
                  class="p-4 rounded-xl border-2 border-surface-200 dark:border-surface-700 peer-checked:border-medical-500 peer-checked:bg-medical-500/5 transition-all text-center">
                  <svg class="w-8 h-8 mx-auto mb-2 text-medical-500" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>
                  <span class="font-semibold text-sm">Pasien</span>
                  <p class="text-xs text-surface-500 mt-1">Pasien</p>
                </div>
              </label>
            </div>
          </div> --}}

          <button type="submit"
            class="w-full block py-3.5 bg-gradient-to-r from-medical-500 to-medical-600 hover:from-medical-600 hover:to-medical-700 text-white font-semibold rounded-xl transition-all shadow-lg shadow-medical-500/25 active:scale-[0.98]">
            Masuk
          </button>
        </form>

        <p class="text-center text-sm text-surface-500 mt-6">
          Belum memiliki akun?
          <a href="{{ route('register') }}" class="text-medical-500 hover:underline font-medium">Daftar sekarang</a>
        </p>
      </div>
    </div>
  </div>
@endsection
