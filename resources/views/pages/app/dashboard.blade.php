@extends('layouts.app')

@section('content')
  <!-- Welcome Section -->
  <div class="mb-6 animate-slide-up">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-2">
      <div>
        <p class="text-sm text-medical-600 dark:text-medical-400 font-medium mb-1">Selamat Pagi,
          {{ auth()->user()->getRoleNames()->first() === 'nakes' ? 'Dr. ' : '' }}
          {{ auth()->user()->name }}</p>
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
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold">{{ $totalPatient }}</p>
      <p class="text-sm text-surface-500 mt-1">Total Pasien</p>
    </div>

    <!-- Sedang Ditangani -->
    <div
      class="animate-slide-up delay-2 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl bg-blue-500/10">
          <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold">{{ $totalActive }}</p>
      <p class="text-sm text-surface-500 mt-1">Sedang Ditangani</p>
    </div>

    <!-- Pasien Sembuh -->
    <div
      class="animate-slide-up delay-3 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl bg-amber-500/10">
          <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
        </div>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold">{{ $totalRecovered }}</p>
      <p class="text-sm text-surface-500 mt-1">Pasien Sembuh</p>
    </div>

    <!-- Jumlah Dokter -->
    <div
      class="animate-slide-up delay-4 stat-card bg-white dark:bg-surface-900 rounded-2xl p-4 lg:p-5 border border-surface-200 dark:border-surface-800">
      <div class="flex items-start justify-between mb-3">
        <div class="p-2.5 rounded-xl bg-red-500/10">
          <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          </svg>
        </div>
      </div>
      <p class="text-2xl lg:text-3xl font-display font-bold text-red-500">{{ $totalDoctor }}</p>
      <p class="text-sm text-surface-500 mt-1">Jumlah Dokter</p>
    </div>

  </div>

  <!-- Main Grid -->
  <div class="grid grid-cols-1 xl:grid-cols-3 gap-4 lg:gap-6">

    <!-- Tabel Pasien -->
    <section
      class="animate-slide-up bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 overflow-hidden col-span-2">
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead class="bg-surface-50 dark:bg-surface-800/50 border-b border-surface-200 dark:border-surface-800">
            <tr>
              <th class="text-left px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider">Pasien</th>
              <th class="text-left px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider">Status</th>
              <th
                class="text-left px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider hidden sm:table-cell">
                Medical Checkup</th>
              <th class="text-right px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider">Aksi</th>
            </tr>
          </thead>
          <tbody id="patientsTableBody" class="divide-y divide-surface-100 dark:divide-surface-800">
            @foreach ($dataPatient as $patient)
              @php
                $lastCheckup = $patient->medicalCheckup->sortByDesc('created_at')->first();
                $age = $lastCheckup ? \Carbon\Carbon::parse($lastCheckup->birth_date)->age : null;
                $gender = $lastCheckup ? ($lastCheckup->gender === 1 ? 'laki-laki' : 'perempuan') : null;
              @endphp
              <tr class="table-row" data-name="{{ strtolower($patient->name) }}" data-age="{{ $age }}"
                data-gender="{{ $gender }}">

                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <img src="{{ $patient->avatar }}" alt="User Avatar"
                      class="w-10 h-10 rounded-full bg-gradient-to-br from-medical-400 to-medical-600 flex items-center justify-center text-white font-bold">
                    <div>
                      <p class="font-semibold text-sm">{{ $patient->name }}</p>
                      <p class="text-xs text-surface-500">
                        {{ $age ? $age . ' Th' : '-' }},
                        {{ $gender ? ucfirst($gender) : '-' }}
                      </p>
                    </div>
                  </div>
                </td>

                <td class="px-6 py-4">
                  @if ($patient->medicalCheckup->isEmpty())
                    <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">Belum
                      Aktif</span>
                  @elseif ($patient->medicalCheckup->last()->status === 'recovered')
                    <span
                      class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Sembuh</span>
                  @else
                    <span
                      class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Perawatan</span>
                  @endif
                </td>

                <td class="px-6 py-4 hidden lg:table-cell">
                  @if ($patient->medicalCheckup->isEmpty())
                    <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">Belum
                      Ada</span>
                  @else
                    <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                      {{ $patient->medicalCheckup->last()->created_at->translatedFormat('d F Y') }} -
                      {{ $patient->medicalCheckup->last()->created_at->translatedFormat('H:i') }}
                    </span>
                  @endif
                </td>

                <td class="px-6 py-4 flex gap-2 justify-end">
                  <a href="{{ route('medical-checkup.index', ['id' => $patient->id]) }}"
                    class="w-8 h-8 flex items-center justify-center rounded-lg border border-surface-200 dark:border-surface-800 hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors">
                    <iconify-icon icon="boxicons:medical-kit" width="17" height="17"
                      class="text-surface-400"></iconify-icon>
                  </a>
                </td>
              </tr>
            @endforeach

            <tr id="emptyRow" style="display: none;">
              <td colspan="4" class="text-center py-12">
                <svg class="w-12 h-12 mx-auto text-surface-300 mb-4" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-surface-500 font-medium">Tidak ada pasien ditemukan</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div
        class="px-6 py-4 border-t border-surface-200 dark:border-surface-800 flex items-center justify-between flex-wrap gap-3">
        <p class="text-sm text-surface-500">
          Menampilkan <span id="showingCount">0</span> dari <span id="totalCount">0</span> pasien
        </p>
        <div id="pagination" class="flex items-center gap-1"></div>
      </div>
    </section>

    <!-- Kategori Tugas -->
    <div
      class="animate-slide-up delay-4 bg-white dark:bg-surface-900 rounded-2xl p-5 border border-surface-200 dark:border-surface-800">
      <h2 class="font-display font-bold text-lg mb-4">Kategori Tugas</h2>

      @php
        // Warna untuk setiap kategori secara bergilir
        $categoryColors = [
            ['bg' => 'bg-red-500/10', 'icon' => 'text-red-500', 'bar' => 'bg-red-500'],
            ['bg' => 'bg-purple-500/10', 'icon' => 'text-purple-500', 'bar' => 'bg-purple-500'],
            ['bg' => 'bg-blue-500/10', 'icon' => 'text-blue-500', 'bar' => 'bg-blue-500'],
            ['bg' => 'bg-green-500/10', 'icon' => 'text-green-500', 'bar' => 'bg-green-500'],
            ['bg' => 'bg-amber-500/10', 'icon' => 'text-amber-500', 'bar' => 'bg-amber-500'],
            ['bg' => 'bg-pink-500/10', 'icon' => 'text-pink-500', 'bar' => 'bg-pink-500'],
        ];
      @endphp

      <div class="space-y-4">
        @forelse ($taskCategories as $i => $category)
          @php
            $color = $categoryColors[$i % count($categoryColors)];
            $percent = $totalTasks > 0 ? round(($category->todolist_count / $totalTasks) * 100) : 0;
          @endphp
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl {{ $color['bg'] }} flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 {{ $color['icon'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
              </svg>
            </div>
            <div class="flex-1">
              <div class="flex items-center justify-between mb-1">
                <span class="font-medium text-sm">{{ $category->name }}</span>
                <span class="text-sm font-bold">{{ $category->todolist_count }}</span>
              </div>
              <div class="h-1.5 bg-surface-100 dark:bg-surface-800 rounded-full overflow-hidden">
                <div class="h-full {{ $color['bar'] }} rounded-full" style="width: {{ $percent }}%"></div>
              </div>
            </div>
          </div>
        @empty
          <p class="text-sm text-surface-500 text-center py-4">Belum ada kategori tugas</p>
        @endforelse
      </div>
    </div>

  </div>
@endsection

@push('js')
  <script>
    const PER_PAGE = 5;
    const allRows = Array.from(document.querySelectorAll('#patientsTableBody .table-row'));
    const totalCount = allRows.length;

    let filteredRows = [...allRows];
    let currentPage = 1;

    document.getElementById('totalCount').textContent = totalCount;

    function renderPage(page) {
      currentPage = page;
      const start = (page - 1) * PER_PAGE;
      const end = start + PER_PAGE;

      allRows.forEach(row => row.style.display = 'none');
      filteredRows.slice(start, end).forEach(row => row.style.display = '');

      document.getElementById('emptyRow').style.display = filteredRows.length === 0 ? '' : 'none';
      document.getElementById('showingCount').textContent = filteredRows.length;
      renderPagination();
    }

    function renderPagination() {
      const container = document.getElementById('pagination');
      const totalPages = Math.ceil(filteredRows.length / PER_PAGE);
      container.innerHTML = '';
      if (totalPages <= 1) return;

      const btnBase = 'px-3 py-1.5 rounded-lg text-sm font-medium transition-colors border ';
      const btnActive = 'bg-medical-500 text-white border-medical-500';
      const btnIdle =
        'bg-white dark:bg-surface-900 text-surface-600 dark:text-surface-300 border-surface-200 dark:border-surface-700 hover:border-medical-500';

      const prev = document.createElement('button');
      prev.innerHTML = '&lsaquo;';
      prev.className = btnBase + btnIdle + (currentPage === 1 ? ' opacity-40 cursor-not-allowed' : '');
      prev.disabled = currentPage === 1;
      prev.onclick = () => renderPage(currentPage - 1);
      container.appendChild(prev);

      let startPage = Math.max(1, currentPage - 2);
      let endPage = Math.min(totalPages, startPage + 4);
      if (endPage - startPage < 4) startPage = Math.max(1, endPage - 4);

      if (startPage > 1) {
        container.appendChild(pageBtn(1, btnBase, btnActive, btnIdle));
        if (startPage > 2) container.appendChild(ellipsis());
      }
      for (let i = startPage; i <= endPage; i++) container.appendChild(pageBtn(i, btnBase, btnActive, btnIdle));
      if (endPage < totalPages) {
        if (endPage < totalPages - 1) container.appendChild(ellipsis());
        container.appendChild(pageBtn(totalPages, btnBase, btnActive, btnIdle));
      }

      const next = document.createElement('button');
      next.innerHTML = '&rsaquo;';
      next.className = btnBase + btnIdle + (currentPage === totalPages ? ' opacity-40 cursor-not-allowed' : '');
      next.disabled = currentPage === totalPages;
      next.onclick = () => renderPage(currentPage + 1);
      container.appendChild(next);
    }

    function pageBtn(n, btnBase, btnActive, btnIdle) {
      const btn = document.createElement('button');
      btn.textContent = n;
      btn.className = btnBase + (n === currentPage ? btnActive : btnIdle);
      btn.onclick = () => renderPage(n);
      return btn;
    }

    function ellipsis() {
      const span = document.createElement('span');
      span.textContent = '…';
      span.className = 'px-2 text-surface-400 text-sm';
      return span;
    }

    function handleSearch() {
      const keyword = document.getElementById('searchInput').value.toLowerCase().trim();
      filteredRows = allRows.filter(row => {
        return (row.dataset.name || '').includes(keyword) ||
          (row.dataset.age || '').includes(keyword) ||
          (row.dataset.gender || '').includes(keyword);
      });
      renderPage(1);
    }

    renderPage(1);
  </script>
@endpush
