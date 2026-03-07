@extends('layouts.app')


@section('content')
  <!-- Welcome Section -->
  <div class="mb-6 animate-slide-up">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-2">
      <div>
        <p class="text-sm text-medical-600 dark:text-medical-400 font-medium mb-1">Selamat Pagi, Dr. Irfan</p>
        <h1 class="font-display text-2xl lg:text-3xl font-bold tracking-tight">Hospital Dashboard</h1>
      </div>
      <div class="flex items-center gap-2 text-sm text-surface-500">
        <span class="w-2 h-2 bg-green-500 rounded-full"></span>
        <span>All systems operational</span>
      </div>
    </div>
  </div>

  <!-- Stats Grid -->
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-4 mb-6">
    <!-- Total Patients -->
    <div
      class="animate-slide-up delay-1 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl bg-medical-500/10">
          <svg class="w-5 h-5 text-medical-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>
        <span class="text-xs font-medium text-green-500 bg-green-500/10 px-2 py-1 rounded-full">+12%</span>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold">1,284</p>
      <p class="text-sm text-surface-500 mt-1">Total Pasien</p>
    </div>

    <!-- Today's Appointments -->
    <div
      class="animate-slide-up delay-2 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl bg-blue-500/10">
          <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <span class="text-xs font-medium text-blue-500 bg-blue-500/10 px-2 py-1 rounded-full">Today</span>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold">48</p>
      <p class="text-sm text-surface-500 mt-1">Sedang Ditangani</p>
    </div>

    <!-- Available Beds -->
    <div
      class="animate-slide-up delay-3 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl bg-amber-500/10">
          <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
        </div>
        <span class="text-xs font-medium text-amber-500 bg-amber-500/10 px-2 py-1 rounded-full">76%</span>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold">64</p>
      <p class="text-sm text-surface-500 mt-1">Pasien Sembuh</p>
    </div>

    <!-- Critical Patients -->
    <div
      class="animate-slide-up delay-4 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl">
          <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          </svg>
        </div>
        <span class="relative text-xs font-medium text-red-500 bg-red-500/10 px-2 py-1 rounded-full">Alert</span>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold text-red-500">8</p>
      <p class="text-sm text-surface-500 mt-1">Pasien Kritis</p>
    </div>
  </div>

  <!-- Main Grid -->
  <div class="grid grid-cols-1 xl:grid-cols-3 gap-4 lg:gap-6">
    <!-- Patient Visits Chart -->
    <div
      class="xl:col-span-2 animate-slide-up delay-3 bg-white dark:bg-surface-900 rounded-2xl p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
        <div>
          <h2 class="font-display font-bold text-lg">Patient Visits</h2>
          <p class="text-sm text-surface-500">Weekly overview</p>
        </div>
        <div class="flex items-center gap-4 text-sm">
          <div class="flex items-center gap-2">
            <span class="w-3 h-3 rounded-full bg-medical-500"></span>
            <span class="text-surface-500">Inpatient</span>
          </div>
          <div class="flex items-center gap-2">
            <span class="w-3 h-3 rounded-full bg-medical-200"></span>
            <span class="text-surface-500">Outpatient</span>
          </div>
        </div>
      </div>

      <!-- Chart Bars -->
      <div class="h-48 flex items-end gap-2 lg:gap-3">
        <div class="flex-1 flex flex-col items-center gap-2">
          <div class="w-full flex gap-1 h-32 items-end">
            <div class="flex-1 bg-medical-500 rounded-t-lg transition-all hover:bg-medical-400" style="height: 60%">
            </div>
            <div class="flex-1 bg-medical-200 rounded-t-lg transition-all hover:bg-medical-300" style="height: 45%">
            </div>
          </div>
          <span class="text-xs text-surface-400">Mon</span>
        </div>
        <div class="flex-1 flex flex-col items-center gap-2">
          <div class="w-full flex gap-1 h-32 items-end">
            <div class="flex-1 bg-medical-500 rounded-t-lg transition-all hover:bg-medical-400" style="height: 75%">
            </div>
            <div class="flex-1 bg-medical-200 rounded-t-lg transition-all hover:bg-medical-300" style="height: 55%">
            </div>
          </div>
          <span class="text-xs text-surface-400">Tue</span>
        </div>
        <div class="flex-1 flex flex-col items-center gap-2">
          <div class="w-full flex gap-1 h-32 items-end">
            <div class="flex-1 bg-medical-500 rounded-t-lg transition-all hover:bg-medical-400" style="height: 50%">
            </div>
            <div class="flex-1 bg-medical-200 rounded-t-lg transition-all hover:bg-medical-300" style="height: 70%"></div>
          </div>
          <span class="text-xs text-surface-400">Wed</span>
        </div>
        <div class="flex-1 flex flex-col items-center gap-2">
          <div class="w-full flex gap-1 h-32 items-end">
            <div class="flex-1 bg-medical-500 rounded-t-lg transition-all hover:bg-medical-400" style="height: 90%"></div>
            <div class="flex-1 bg-medical-200 rounded-t-lg transition-all hover:bg-medical-300" style="height: 65%"></div>
          </div>
          <span class="text-xs text-surface-400">Thu</span>
        </div>
        <div class="flex-1 flex flex-col items-center gap-2">
          <div class="w-full flex gap-1 h-32 items-end">
            <div class="flex-1 bg-medical-500 rounded-t-lg transition-all hover:bg-medical-400" style="height: 85%">
            </div>
            <div class="flex-1 bg-medical-200 rounded-t-lg transition-all hover:bg-medical-300" style="height: 80%">
            </div>
          </div>
          <span class="text-xs text-surface-400">Fri</span>
        </div>
        <div class="flex-1 flex flex-col items-center gap-2">
          <div class="w-full flex gap-1 h-32 items-end">
            <div class="flex-1 bg-medical-500 rounded-t-lg transition-all hover:bg-medical-400" style="height: 40%">
            </div>
            <div class="flex-1 bg-medical-200 rounded-t-lg transition-all hover:bg-medical-300" style="height: 35%">
            </div>
          </div>
          <span class="text-xs text-surface-400">Sat</span>
        </div>
        <div class="flex-1 flex flex-col items-center gap-2">
          <div class="w-full flex gap-1 h-32 items-end">
            <div class="flex-1 bg-medical-500 rounded-t-lg transition-all hover:bg-medical-400" style="height: 30%">
            </div>
            <div class="flex-1 bg-medical-200 rounded-t-lg transition-all hover:bg-medical-300" style="height: 25%">
            </div>
          </div>
          <span class="text-xs text-surface-400">Sun</span>
        </div>
      </div>
    </div>

    <!-- Department Stats -->
    <div
      class="animate-slide-up delay-4 bg-white dark:bg-surface-900 rounded-2xl p-5 border border-surface-200 dark:border-surface-800">
      <h2 class="font-display font-bold text-lg mb-4">Department Activity</h2>

      <div class="space-y-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-red-500/10 flex items-center justify-center">
            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
          </div>
          <div class="flex-1">
            <div class="flex items-center justify-between mb-1">
              <span class="font-medium text-sm">Cardiology</span>
              <span class="text-sm font-bold">32</span>
            </div>
            <div class="h-1.5 bg-surface-100 dark:bg-surface-800 rounded-full overflow-hidden">
              <div class="h-full bg-red-500 rounded-full" style="width: 80%"></div>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-purple-500/10 flex items-center justify-center">
            <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
          </div>
          <div class="flex-1">
            <div class="flex items-center justify-between mb-1">
              <span class="font-medium text-sm">Neurology</span>
              <span class="text-sm font-bold">24</span>
            </div>
            <div class="h-1.5 bg-surface-100 dark:bg-surface-800 rounded-full overflow-hidden">
              <div class="h-full bg-purple-500 rounded-full" style="width: 60%"></div>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-blue-500/10 flex items-center justify-center">
            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div class="flex-1">
            <div class="flex items-center justify-between mb-1">
              <span class="font-medium text-sm">Orthopedics</span>
              <span class="text-sm font-bold">18</span>
            </div>
            <div class="h-1.5 bg-surface-100 dark:bg-surface-800 rounded-full overflow-hidden">
              <div class="h-full bg-blue-500 rounded-full" style="width: 45%"></div>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-green-500/10 flex items-center justify-center">
            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </div>
          <div class="flex-1">
            <div class="flex items-center justify-between mb-1">
              <span class="font-medium text-sm">Pediatrics</span>
              <span class="text-sm font-bold">28</span>
            </div>
            <div class="h-1.5 bg-surface-100 dark:bg-surface-800 rounded-full overflow-hidden">
              <div class="h-full bg-green-500 rounded-full" style="width: 70%"></div>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center">
            <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
          </div>
          <div class="flex-1">
            <div class="flex items-center justify-between mb-1">
              <span class="font-medium text-sm">General</span>
              <span class="text-sm font-bold">42</span>
            </div>
            <div class="h-1.5 bg-surface-100 dark:bg-surface-800 rounded-full overflow-hidden">
              <div class="h-full bg-amber-500 rounded-full" style="width: 95%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Appointments Table -->
  <div
    class="mt-4 lg:mt-6 animate-slide-up delay-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 overflow-hidden">
    <div class="p-5 border-b border-surface-200 dark:border-surface-800">
      <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
        <div>
          <h2 class="font-display font-bold text-lg">Today's Appointments</h2>
          <p class="text-sm text-surface-500">48 scheduled appointments</p>
        </div>
        <div class="flex items-center gap-2">
          <button
            class="px-4 py-2 text-sm font-medium text-surface-600 dark:text-surface-400 bg-surface-100 dark:bg-surface-800 rounded-xl hover:bg-surface-200 dark:hover:bg-surface-700 transition-colors focus-ring">
            Export
          </button>
          <button
            class="inline-flex items-center gap-2 px-4 py-2 bg-medical-500 hover:bg-medical-600 text-white font-medium rounded-xl transition-colors focus-ring">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add Appointment
          </button>
        </div>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full">
        <thead class="bg-surface-50 dark:bg-surface-800/50">
          <tr>
            <th class="text-left px-5 py-3 text-xs font-semibold text-surface-500 uppercase tracking-wider">Patient
            </th>
            <th
              class="text-left px-5 py-3 text-xs font-semibold text-surface-500 uppercase tracking-wider hidden sm:table-cell">
              Doctor</th>
            <th
              class="text-left px-5 py-3 text-xs font-semibold text-surface-500 uppercase tracking-wider hidden md:table-cell">
              Department</th>
            <th class="text-left px-5 py-3 text-xs font-semibold text-surface-500 uppercase tracking-wider">Time
            </th>
            <th class="text-left px-5 py-3 text-xs font-semibold text-surface-500 uppercase tracking-wider">Status
            </th>
            <th class="text-right px-5 py-3 text-xs font-semibold text-surface-500 uppercase tracking-wider">Action
            </th>
          </tr>
        </thead>
        <tbody class="divide-y divide-surface-100 dark:divide-surface-800">
          <tr class="hover:bg-surface-50 dark:hover:bg-surface-800/30 transition-colors">
            <td class="px-5 py-4">
              <div class="flex items-center gap-3">
                <div
                  class="w-9 h-9 rounded-full bg-gradient-to-br from-medical-400 to-medical-600 flex items-center justify-center text-white text-sm font-bold">
                  AS
                </div>
                <div>
                  <p class="font-medium text-sm">Ahmad Syafii</p>
                  <p class="text-xs text-surface-500">#PT-2024-001</p>
                </div>
              </div>
            </td>
            <td class="px-5 py-4 hidden sm:table-cell">
              <p class="text-sm font-medium">Dr. Sarah Chen</p>
            </td>
            <td class="px-5 py-4 hidden md:table-cell">
              <span class="text-sm text-surface-600 dark:text-surface-400">Cardiology</span>
            </td>
            <td class="px-5 py-4">
              <span class="text-sm font-medium">08:00</span>
            </td>
            <td class="px-5 py-4">
              <span
                class="inline-flex px-2.5 py-1 text-xs font-semibold rounded-full bg-green-500/10 text-green-600 dark:text-green-400">Completed</span>
            </td>
            <td class="px-5 py-4 text-right">
              <button
                class="p-1.5 rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring"
                aria-label="View details">
                <svg class="w-5 h-5 text-surface-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </button>
            </td>
          </tr>

          <tr class="hover:bg-surface-50 dark:hover:bg-surface-800/30 transition-colors">
            <td class="px-5 py-4">
              <div class="flex items-center gap-3">
                <div
                  class="w-9 h-9 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center text-white text-sm font-bold">
                  MW
                </div>
                <div>
                  <p class="font-medium text-sm">Maya Wijaya</p>
                  <p class="text-xs text-surface-500">#PT-2024-002</p>
                </div>
              </div>
            </td>
            <td class="px-5 py-4 hidden sm:table-cell">
              <p class="text-sm font-medium">Dr. James Park</p>
            </td>
            <td class="px-5 py-4 hidden md:table-cell">
              <span class="text-sm text-surface-600 dark:text-surface-400">Neurology</span>
            </td>
            <td class="px-5 py-4">
              <span class="text-sm font-medium">09:30</span>
            </td>
            <td class="px-5 py-4">
              <span
                class="inline-flex px-2.5 py-1 text-xs font-semibold rounded-full bg-blue-500/10 text-blue-600 dark:text-blue-400">In
                Progress</span>
            </td>
            <td class="px-5 py-4 text-right">
              <button
                class="p-1.5 rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring"
                aria-label="View details">
                <svg class="w-5 h-5 text-surface-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </button>
            </td>
          </tr>

          <tr class="hover:bg-surface-50 dark:hover:bg-surface-800/30 transition-colors">
            <td class="px-5 py-4">
              <div class="flex items-center gap-3">
                <div
                  class="w-9 h-9 rounded-full bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center text-white text-sm font-bold">
                  BH
                </div>
                <div>
                  <p class="font-medium text-sm">Budi Hartono</p>
                  <p class="text-xs text-surface-500">#PT-2024-003</p>
                </div>
              </div>
            </td>
            <td class="px-5 py-4 hidden sm:table-cell">
              <p class="text-sm font-medium">Dr. Emily Tan</p>
            </td>
            <td class="px-5 py-4 hidden md:table-cell">
              <span class="text-sm text-surface-600 dark:text-surface-400">Orthopedics</span>
            </td>
            <td class="px-5 py-4">
              <span class="text-sm font-medium">11:00</span>
            </td>
            <td class="px-5 py-4">
              <span
                class="inline-flex px-2.5 py-1 text-xs font-semibold rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400">Waiting</span>
            </td>
            <td class="px-5 py-4 text-right">
              <button
                class="p-1.5 rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring"
                aria-label="View details">
                <svg class="w-5 h-5 text-surface-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </button>
            </td>
          </tr>

          <tr class="hover:bg-surface-50 dark:hover:bg-surface-800/30 transition-colors">
            <td class="px-5 py-4">
              <div class="flex items-center gap-3">
                <div
                  class="w-9 h-9 rounded-full bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center text-white text-sm font-bold">
                  RP
                </div>
                <div>
                  <p class="font-medium text-sm">Rina Permata</p>
                  <p class="text-xs text-surface-500">#PT-2024-004</p>
                </div>
              </div>
            </td>
            <td class="px-5 py-4 hidden sm:table-cell">
              <p class="text-sm font-medium">Dr. Michael Lee</p>
            </td>
            <td class="px-5 py-4 hidden md:table-cell">
              <span class="text-sm text-surface-600 dark:text-surface-400">Pediatrics</span>
            </td>
            <td class="px-5 py-4">
              <span class="text-sm font-medium">13:30</span>
            </td>
            <td class="px-5 py-4">
              <span
                class="inline-flex px-2.5 py-1 text-xs font-semibold rounded-full bg-surface-100 dark:bg-surface-800 text-surface-600 dark:text-surface-400">Scheduled</span>
            </td>
            <td class="px-5 py-4 text-right">
              <button
                class="p-1.5 rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring"
                aria-label="View details">
                <svg class="w-5 h-5 text-surface-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </button>
            </td>
          </tr>

          <tr class="hover:bg-surface-50 dark:hover:bg-surface-800/30 transition-colors bg-red-500/5">
            <td class="px-5 py-4">
              <div class="flex items-center gap-3">
                <div
                  class="w-9 h-9 rounded-full bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center text-white text-sm font-bold animate-pulse-soft">
                  DS
                </div>
                <div>
                  <p class="font-medium text-sm">Doni Setiawan</p>
                  <p class="text-xs text-red-500 font-medium">Critical Patient</p>
                </div>
              </div>
            </td>
            <td class="px-5 py-4 hidden sm:table-cell">
              <p class="text-sm font-medium">Dr. Rachel Kim</p>
            </td>
            <td class="px-5 py-4 hidden md:table-cell">
              <span class="text-sm text-surface-600 dark:text-surface-400">ICU</span>
            </td>
            <td class="px-5 py-4">
              <span class="text-sm font-medium text-red-500">Urgent</span>
            </td>
            <td class="px-5 py-4">
              <span
                class="inline-flex px-2.5 py-1 text-xs font-semibold rounded-full bg-red-500/10 text-red-600 dark:text-red-400">Emergency</span>
            </td>
            <td class="px-5 py-4 text-right">
              <button class="p-1.5 rounded-lg hover:bg-red-500/10 transition-colors focus-ring"
                aria-label="View details">
                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div
      class="px-5 py-4 border-t border-surface-200 dark:border-surface-800 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-sm text-surface-500">Showing 1-5 of 48 appointments</p>
      <div class="flex items-center gap-1">
        <button
          class="px-3 py-1.5 text-sm font-medium rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring disabled:opacity-50"
          disabled>
          Previous
        </button>
        <button class="px-3 py-1.5 text-sm font-medium rounded-lg bg-medical-500 text-white">1</button>
        <button
          class="px-3 py-1.5 text-sm font-medium rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring">2</button>
        <button
          class="px-3 py-1.5 text-sm font-medium rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring">3</button>
        <button
          class="px-3 py-1.5 text-sm font-medium rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring">
          Next
        </button>
      </div>
    </div>
  </div>
@endsection
