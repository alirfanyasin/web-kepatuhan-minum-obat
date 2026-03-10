@extends('layouts.app')
@section('content')
  <x-breadcrumb title="Daftar Pasien" sub-title="Kelola dan cari data pasien">
    <div class="flex items-center gap-3">
      <div class="relative">
        <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-surface-400" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <input type="text" id="searchInput" placeholder="Cari nama, ID, kondisi..."
          class="w-full md:w-64 pl-9 pr-4 py-2.5 rounded-xl bg-white dark:bg-surface-900 border border-surface-200 dark:border-surface-700 focus:border-medical-500 outline-none transition-colors text-sm"
          onkeyup="handleSearch()">
      </div>
    </div>
  </x-breadcrumb>

  <section
    class="bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full">
        <thead class="bg-surface-50 dark:bg-surface-800/50 border-b border-surface-200 dark:border-surface-800">
          <tr>
            <th class="text-left px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider">Pasien</th>
            <th
              class="text-left px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider hidden md:table-cell">
              ID</th>
            <th
              class="text-left px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider hidden lg:table-cell">
              Kondisi</th>
            <th class="text-left px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider">Status</th>

            <th
              class="text-left px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider hidden sm:table-cell">
              Medical Checkup</th>
            <th class="text-right px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider">Aksi</th>
          </tr>
        </thead>
        <tbody id="patientsTableBody" class="divide-y divide-surface-100 dark:divide-surface-800">
          @foreach ($dataPatient as $patient)
            <tr class="table-row">
              <td class="px-6 py-4">
                <div class="flex items-center gap-3">
                  <img src="{{ $patient->avatar }}" alt="User Avatar"
                    class="w-10 h-10 rounded-full bg-gradient-to-br from-medical-400 to-medical-600 flex items-center justify-center text-white font-bold">
                  <div>
                    <p class="font-semibold text-sm">{{ $patient->name }}</p>
                    <p class="text-xs text-surface-500">{{ $patient->age ?? 0 }} Th, {{ $patient->gender ?? 'Laki-laki' }}
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 text-sm hidden md:table-cell font-mono">P001</td>
              <td class="px-6 py-4 text-sm hidden lg:table-cell">Hipertensi</td>
              <td class="px-6 py-4">
                <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                  Aktif
                </span>
              </td>

              <td class="px-6 py-4 hidden lg:table-cell">
                <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                  Belum Ada
                </span>
              </td>
              <td class="px-6 py-4 flex gap-2 justify-end">
                <a href="{{ route('medical-checkup.index', ['id' => $patient->id]) }}"
                  class="w-8 h-8 flex items-center justify-center rounded-lg border border-surface-200  dark:border-surface-800 hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors">
                  <iconify-icon icon="boxicons:medical-kit" width="17" height="17"
                    class="text-surface-400"></iconify-icon>
                </a>
                <button onclick="alert('Lihat detail Ahmad Wijaya')"
                  class="w-8 h-8 flex items-center justify-center rounded-lg border border-surface-200  dark:border-surface-800 hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors">
                  <iconify-icon icon="carbon:view" width="17" height="17" class="text-surface-400"></iconify-icon>
                </button>
              </td>
            </tr>
          @endforeach


          {{-- Tidak Di temukan --}}
          {{-- <tr>
            <td colspan="6" class="text-center py-12">
              <svg class="w-12 h-12 mx-auto text-surface-300 mb-4" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <p class="text-surface-500 font-medium">Tidak ada pasien ditemukan</p>
            </td>
          </tr> --}}
        </tbody>
      </table>
    </div>

    <!-- Footer Info -->
    <div class="px-6 py-4 border-t border-surface-200 dark:border-surface-800 flex items-center justify-between">
      <p class="text-sm text-surface-500">Menampilkan <span id="showingCount">0</span> dari <span id="totalCount">0</span>
        pasien</p>
    </div>
  </section>
@endsection
