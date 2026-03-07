@extends('layouts.app')
@section('content')
  <x-breadcrumb title="To-Do List Management" sub-title="Kelola tugas dan jadwal pasien" />

  <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
    <div>

      <section class="p-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 mb-2">
        <form action="" class="flex items-center gap-3">
          <input type="text" name="search" id="search" placeholder="Cari pasien..."
            class="w-full p-3 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white" />
          <select name="filter" id="filter"
            class="w-full p-3 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white">
            <option value="">Filter</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </form>
      </section>

      <section
        class="p-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 space-y-3">
        <x-patient-card name="Irfan Yasin" age="25" gender="Laki-Laki" initial="IY" idPatient="1002" />
        <x-patient-card name="Irfan Yasin" age="25" gender="Laki-Laki" initial="IY" idPatient="1003" />
        <x-patient-card name="Irfan Yasin" age="25" gender="Laki-Laki" initial="IY" idPatient="1004" />
        <x-patient-card name="Irfan Yasin" age="25" gender="Laki-Laki" initial="IY" idPatient="1005" />
        <x-patient-card name="Irfan Yasin" age="25" gender="Laki-Laki" initial="IY" idPatient="1006" />

      </section>
    </div>



    <section class="">

      <!-- Header -->
      <header class="mb-8 animate-slide-up">
        <div class="flex items-center justify-between mb-6">
          <div>
            <p class="text-sm text-medical-600 dark:text-medical-400 mb-1">Selamat Pagi,</p>
            <h1 class="font-display text-2xl md:text-3xl font-bold">Irfan Yasin</h1>
          </div>
        </div>

        <!-- Progress Card -->
        <div
          class="bg-gradient-to-br from-medical-500 to-medical-700 rounded-3xl p-6 text-white shadow-xl shadow-medical-500/20">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-medical-100 text-sm font-medium mb-1">Progress Hari Ini</p>
              <h2 class="text-3xl font-display font-bold mb-2" id="progressText">3 dari 6</h2>
              <p class="text-medical-100 text-sm">tugas telah diselesaikan</p>
            </div>
            <div class="relative">
              <svg class="progress-ring w-20 h-20" viewBox="0 0 36 36">
                <circle cx="18" cy="18" r="15.9155" fill="none" stroke="rgba(255,255,255,0.2)"
                  stroke-width="3" />
                <circle id="progressCircle" class="progress-ring-circle" cx="18" cy="18" r="15.9155"
                  fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-dasharray="50, 100" />
              </svg>
              <span class="absolute inset-0 flex items-center justify-center text-lg font-bold"
                id="progressPercent">50%</span>
            </div>
          </div>
        </div>
      </header>

      <!-- Filter Tabs -->
      <div class="flex gap-2 mb-6 overflow-x-auto pb-2 animate-slide-up" style="animation-delay: 0.1s">
        <button onclick="filterTasks('all')"
          class="filter-btn active px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-medical-500 text-white">
          Semua
        </button>
        <button onclick="filterTasks('medicine')"
          class="filter-btn px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-surface-100 dark:bg-surface-800 text-surface-600 dark:text-surface-300 border border-surface-200 dark:border-surface-700 hover:border-medical-500">
          Obat
        </button>
        <button onclick="filterTasks('activity')"
          class="filter-btn px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-surface-100 dark:bg-surface-800 text-surface-600 dark:text-surface-300 border border-surface-200 dark:border-surface-700 hover:border-medical-500">
          Aktivitas
        </button>
        <button onclick="filterTasks('lifestyle')"
          class="filter-btn px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-surface-100 dark:bg-surface-800 text-surface-600 dark:text-surface-300 border border-surface-200 dark:border-surface-700 hover:border-medical-500">
          Gaya Hidup
        </button>
        <button onclick="filterTasks('checkup')"
          class="filter-btn px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-surface-100 dark:bg-surface-800 text-surface-600 dark:text-surface-300 border border-surface-200 dark:border-surface-700 hover:border-medical-500">
          Pemeriksaan
        </button>
      </div>


      <!-- Task List -->
      <div class="space-y-3" id="taskList">
        <div
          class="task-item task-card bg-white dark:bg-surface-900 rounded-2xl p-4 border border-surface-200 dark:border-surface-800 shadow-sm"
          data-id="1">
          <div class="flex items-start gap-4">

            <!-- Checkbox -->
            <button onclick="toggleTask(1)" class="flex-shrink-0 mt-0.5 rounded-lg">
              <div
                class="checkbox-custom w-7 h-7 rounded-lg border-2 border-surface-300 flex items-center justify-center">

                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>

              </div>
            </button>

            <!-- Content -->
            <div class="flex-1 min-w-0">
              <div class="flex items-center gap-2 mb-1">
                <h3 class="font-semibold text-base task-text">
                  Minum Obat Pagi
                </h3>
              </div>

              <p class="text-sm text-surface-500 mb-3">
                Minum obat setelah sarapan
              </p>

              <div class="flex flex-wrap items-center gap-3 text-xs">
                <!-- Time -->
                <div class="flex items-center gap-1.5 text-surface-500">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span>08:00 AM</span>
                </div>

                <!-- Doctor -->
                <div class="flex items-center gap-1.5 text-surface-500">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>
                  <span>Dr. Andi</span>
                </div>

              </div>
            </div>

            <div class="flex-shrink-0 flex flex-col items-end gap-2">
              <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-green-100 text-green-600">
                <iconify-icon icon="icomoon-free:lab" width="16" height="16"></iconify-icon>
              </div>
              <span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-0.5 rounded-full">
                Obat
              </span>
            </div>

          </div>
        </div>
      </div>



    </section>

  </div>
@endsection
