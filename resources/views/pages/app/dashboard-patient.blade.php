@extends('layouts.app')

@section('content')
  <!-- Welcome Section -->
  <div class="mb-6 animate-slide-up">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-2">
      <div>
        <p class="text-sm text-medical-600 dark:text-medical-400 font-medium mb-1">
          Selamat Pagi, {{ auth()->user()->name }}
        </p>
        <h1 class="font-display text-2xl lg:text-3xl font-bold tracking-tight">Dashboard Pasien</h1>
      </div>
      <div class="flex items-center gap-2 text-sm text-surface-500">
        <span class="w-2 h-2 bg-green-500 rounded-full"></span>
        <span>
          @if ($lastCheckup)
            Dalam perawatan sejak {{ $lastCheckup->created_at->translatedFormat('d F Y') }}
          @else
            Belum ada data perawatan
          @endif
        </span>
      </div>
    </div>
  </div>

  <!-- Stats Grid -->
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-4 mb-6">

    <!-- Total Todolist -->
    <div
      class="animate-slide-up delay-1 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl bg-medical-500/10">
          <svg class="w-5 h-5 text-medical-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
          </svg>
        </div>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold">{{ $totalTodolist }}</p>
      <p class="text-sm text-surface-500 mt-1">Total Todolist</p>
    </div>

    <!-- Todolist Selesai -->
    <div
      class="animate-slide-up delay-2 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl bg-green-500/10">
          <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold text-green-500">{{ $todolistDone }}</p>
      <p class="text-sm text-surface-500 mt-1">Todolist Selesai</p>
    </div>

    <!-- Todolist Belum Selesai -->
    <div
      class="animate-slide-up delay-3 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl bg-amber-500/10">
          <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold text-amber-500">{{ $todolistPending }}</p>
      <p class="text-sm text-surface-500 mt-1">Belum Selesai</p>
    </div>

    <!-- Jumlah Medical Checkup -->
    <div
      class="animate-slide-up delay-4 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl bg-blue-500/10">
          <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
          </svg>
        </div>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold text-blue-500">{{ $totalCheckup }}</p>
      <p class="text-sm text-surface-500 mt-1">Medical Checkup</p>
    </div>

  </div>

  <!-- Main Grid -->
  <div class="grid grid-cols-1 xl:grid-cols-3 gap-4 lg:gap-6">

    <!-- Progress Card -->
    <section
      class="animate-slide-up bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 overflow-hidden col-span-2">

      <div class="px-6 py-4 border-b border-surface-200 dark:border-surface-800">
        <h2 class="font-display font-bold text-lg">Progress Perawatan</h2>
        <p class="text-sm text-surface-500">
          @if ($lastCheckup)
            Medical Checkup: {{ $lastCheckup->created_at->translatedFormat('d F Y') }}
          @else
            Belum ada medical checkup aktif
          @endif
        </p>
      </div>

      @if ($lastCheckup)
        <!-- Progress Bars -->
        <div class="p-6 grid grid-cols-1 sm:grid-cols-2 gap-6">

          <!-- Progress Harian -->
          <div class="bg-surface-50 dark:bg-surface-800/50 rounded-2xl p-5">
            <div class="flex items-center justify-between mb-4">
              <div>
                <p class="font-semibold text-sm">Progress Harian</p>
                <p class="text-xs text-surface-500 mt-0.5">{{ $todayDone }} dari {{ $todayTotal }} tugas selesai</p>
              </div>
              <div class="relative w-16 h-16">
                <svg class="w-16 h-16 -rotate-90" viewBox="0 0 36 36">
                  <circle cx="18" cy="18" r="15.9155" fill="none" stroke="currentColor"
                    class="text-surface-200 dark:text-surface-700" stroke-width="3" />
                  <circle cx="18" cy="18" r="15.9155" fill="none" stroke="currentColor"
                    class="text-medical-500" stroke-width="3" stroke-linecap="round"
                    stroke-dasharray="{{ $todayPercent }}, 100" />
                </svg>
                <span class="absolute inset-0 flex items-center justify-center text-sm font-bold">
                  {{ $todayPercent }}%
                </span>
              </div>
            </div>
            <div class="h-2 bg-surface-200 dark:bg-surface-700 rounded-full overflow-hidden">
              <div class="h-full bg-medical-500 rounded-full transition-all" style="width: {{ $todayPercent }}%"></div>
            </div>
          </div>

          <!-- Progress Target -->
          <div class="bg-surface-50 dark:bg-surface-800/50 rounded-2xl p-5">
            <div class="flex items-center justify-between mb-4">
              <div>
                <p class="font-semibold text-sm">Progress Target</p>
                <p class="text-xs text-surface-500 mt-0.5">{{ $todolistDone }} dari {{ $totalTodolist }} tugas selesai
                </p>
              </div>
              <div class="relative w-16 h-16">
                <svg class="w-16 h-16 -rotate-90" viewBox="0 0 36 36">
                  <circle cx="18" cy="18" r="15.9155" fill="none" stroke="currentColor"
                    class="text-surface-200 dark:text-surface-700" stroke-width="3" />
                  <circle cx="18" cy="18" r="15.9155" fill="none" stroke="currentColor"
                    class="text-blue-500" stroke-width="3" stroke-linecap="round"
                    stroke-dasharray="{{ $targetPercent }}, 100" />
                </svg>
                <span class="absolute inset-0 flex items-center justify-center text-sm font-bold">
                  {{ $targetPercent }}%
                </span>
              </div>
            </div>
            <div class="h-2 bg-surface-200 dark:bg-surface-700 rounded-full overflow-hidden">
              <div class="h-full bg-blue-500 rounded-full transition-all" style="width: {{ $targetPercent }}%"></div>
            </div>
          </div>

        </div>
      @else
        <div class="p-12 text-center">
          <svg class="w-12 h-12 mx-auto text-surface-300 mb-4" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <p class="text-surface-500 font-medium">Belum ada medical checkup aktif</p>
        </div>
      @endif

    </section>

    <!-- Todolist Terbaru -->
    <div
      class="animate-slide-up delay-4 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 overflow-hidden">
      <div class="px-5 py-4 border-b border-surface-200 dark:border-surface-800">
        <h2 class="font-display font-bold text-lg">Todolist</h2>
        <p class="text-xs text-surface-500 mt-0.5">Tugas terbaru yang perlu diselesaikan</p>
      </div>

      <div class="divide-y divide-surface-100 dark:divide-surface-800">
        @forelse ($recentTodos as $todo)
          <div class="px-5 py-3 flex items-center gap-3">

            <!-- Status indicator -->
            <div
              class="flex-shrink-0 w-2 h-2 rounded-full {{ $todo->status === 'done' ? 'bg-green-500' : 'bg-amber-400' }}">
            </div>

            <div class="flex-1 min-w-0">
              <p
                class="text-sm font-medium truncate {{ $todo->status === 'done' ? 'line-through text-surface-400' : '' }}">
                {{ $todo->name }}
              </p>
              <p class="text-xs text-surface-400">{{ $todo->created_at->translatedFormat('d F Y') }}</p>
            </div>

            <span
              class="flex-shrink-0 text-xs font-medium px-2 py-0.5 rounded-full
              {{ $todo->status === 'done' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700' }}">
              {{ $todo->status === 'done' ? 'Selesai' : 'Pending' }}
            </span>

          </div>
        @empty
          <div class="px-5 py-10 text-center">
            <p class="text-sm text-surface-500">Belum ada todolist</p>
          </div>
        @endforelse
      </div>

      @if ($lastCheckup)
        <div class="px-5 py-3 border-t border-surface-200 dark:border-surface-800">
          <a href="{{ route('todolist-management', $lastCheckup->id) }}"
            class="text-sm text-medical-500 hover:text-medical-600 font-medium flex items-center gap-1">
            Lihat semua todolist
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      @endif
    </div>

  </div>
@endsection
