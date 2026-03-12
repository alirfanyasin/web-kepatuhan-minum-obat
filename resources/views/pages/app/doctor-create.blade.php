@extends('layouts.app')
@section('content')
  <x-breadcrumb title="Tambah Dokter" sub-title="Tambah data dokter baru">

  </x-breadcrumb>

  <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
    <section
      class="p-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 mb-2 animate-slide-up">

      {{-- Alert sukses --}}
      @if (session('success'))
        <div
          class="mb-4 px-4 py-3 rounded-xl bg-green-50 border border-green-200 text-green-700 text-sm flex items-center gap-2">
          <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
          {{ session('success') }}
        </div>
      @endif

      {{-- Alert error validasi --}}
      @if ($errors->any())
        <div class="mb-4 px-4 py-3 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm space-y-1">
          @foreach ($errors->all() as $error)
            <p class="flex items-center gap-2">
              <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
              {{ $error }}
            </p>
          @endforeach
        </div>
      @endif



      {{-- Form update profil --}}
      <form action="{{ route('doctor.store') }}" method="POST" class="space-y-3">
        @csrf

        <div>
          <label for="name" class="font-semibold mb-1 block text-surface-500">Nama Lengkap</label>
          <input type="text" name="name" id="name" required
            class="w-full p-2 rounded-lg border @error('name') border-red-400 @else border-surface-300 dark:border-surface-700 @enderror focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
            placeholder="John Doe">
        </div>

        <div>
          <label for="email" class="font-semibold mb-1 block text-surface-500">Email</label>
          <input type="email" name="email" id="email" required
            class="w-full p-2 rounded-lg border @error('email') border-red-400 @else border-surface-300 dark:border-surface-700 @enderror focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
            placeholder="john@example.com">
        </div>

        <div>
          <label for="password" class="font-semibold mb-1 block text-surface-500">
            Password
            <span class="text-xs text-surface-400 font-normal">(kosongkan jika tidak ingin mengubah)</span>
          </label>
          <div class="relative">
            <input type="password" name="password" id="password"
              class="w-full p-2 rounded-lg border @error('password') border-red-400 @else border-surface-300 dark:border-surface-700 @enderror focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white pr-10"
              placeholder="Minimal 8 karakter">
            {{-- Toggle show/hide password --}}
            <button type="button" onclick="togglePassword()"
              class="absolute right-2 top-1/2 -translate-y-1/2 text-surface-400 hover:text-surface-600">
              <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </button>
          </div>
        </div>

        <div class="flex justify-end pt-2">
          <button type="submit"
            class="px-5 py-2 bg-gradient-to-br from-medical-500 to-medical-600 text-white rounded-lg hover:opacity-90 transition-opacity">
            Buat Akun
          </button>
        </div>

      </form>
    </section>
  </div>

  @push('js')
    <script>
      // Preview avatar sebelum upload
      document.getElementById('avatarInput').addEventListener('change', function() {
        const file = this.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = e => document.getElementById('avatarPreview').src = e.target.result;
        reader.readAsDataURL(file);

        // Auto-submit form saat file dipilih supaya langsung terupload
        this.closest('form').submit();
      });

      // Toggle show/hide password
      function togglePassword() {
        const input = document.getElementById('password');
        input.type = input.type === 'password' ? 'text' : 'password';
      }
    </script>
  @endpush
@endsection
