@extends('layouts.app')
@section('content')
  <x-breadcrumb title="Daftar Dokter" sub-title="Daftar dokter yang tersedia">
    <a href="{{ route('doctor.create') }}"
      class="w-10 h-10 flex items-center justify-center rounded-lg bg-medical-600 text-white hover:bg-medical-700">
      <iconify-icon icon="tabler:plus" width="24" height="24"></iconify-icon>
    </a>
  </x-breadcrumb>

  <section class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">

    @foreach ($doctors as $doctor)
      <div
        class="p-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 mb-2 animate-slide-up text-center">
        <div
          class="border-2 mx-auto border-surface-200 dark:border-surface-600 rounded-full w-20 h-20 overflow-hidden flex-shrink-0">
          <img
            src="{{ auth()->user()->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=14b8a6&color=fff&size=128' }}"
            alt="Avatar" class="w-full h-full object-cover" id="avatarPreview">
        </div>

        <div class="mt-3">
          <h2 class="font-semibold">{{ $doctor->name }}</h2>
          <p class="text-surface-500 dark:surface-600 text-sm">{{ $doctor->email }}</p>
        </div>
      </div>
    @endforeach
  </section>
@endsection
