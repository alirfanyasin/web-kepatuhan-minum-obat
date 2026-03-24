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
        <input type="text" id="searchInput" placeholder="Cari nama, umur, jenis kelamin"
          class="w-full md:w-64 pl-9 pr-4 py-2.5 rounded-xl bg-white dark:bg-surface-900 border border-surface-200 dark:border-surface-700 focus:border-medical-500 outline-none transition-colors text-sm"
          oninput="handleSearch()">
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
            <th class="text-left px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider">Status</th>
            <th class="text-left px-6 py-4 text-xs font-semibold text-surface-500 uppercase tracking-wider">Diagnosis</th>
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
                  <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                    Belum Aktif
                  </span>
                @elseif ($patient->medicalCheckup->last()->status === 'recovered')
                  <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                    Sembuh
                  </span>
                @else
                  <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                    Perawatan
                  </span>
                @endif
              </td>

              <td class="px-6 py-4">
                @if ($patient->medicalCheckup->isEmpty())
                  <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                    Belum Ada
                  </span>
                @else
                  <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                    {{ $patient->medicalCheckup->last()->diagnosis }}
                  </span>
                @endif
              </td>

              <td class="px-6 py-4 hidden lg:table-cell">
                @if ($patient->medicalCheckup->isEmpty())
                  <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                    Belum Ada
                  </span>
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

          {{-- Tidak ditemukan --}}
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

    <!-- Footer Info -->
    <div
      class="px-6 py-4 border-t border-surface-200 dark:border-surface-800 flex items-center justify-between flex-wrap gap-3">
      <p class="text-sm text-surface-500">
        Menampilkan <span id="showingCount">0</span> dari <span id="totalCount">0</span> pasien
      </p>
      <div id="pagination" class="flex items-center gap-1"></div>
    </div>
  </section>

  @push('js')
    <script>
      const PER_PAGE = 10;
      const allRows = Array.from(document.querySelectorAll('#patientsTableBody .table-row'));
      const totalCount = allRows.length;

      let filteredRows = [...allRows];
      let currentPage = 1;

      document.getElementById('totalCount').textContent = totalCount;

      // ── Render baris sesuai halaman aktif ──────────────────────────────────
      function renderPage(page) {
        currentPage = page;
        const start = (page - 1) * PER_PAGE;
        const end = start + PER_PAGE;

        allRows.forEach(row => row.style.display = 'none');

        const pageRows = filteredRows.slice(start, end);
        pageRows.forEach(row => row.style.display = '');

        const emptyRow = document.getElementById('emptyRow');
        emptyRow.style.display = filteredRows.length === 0 ? '' : 'none';

        document.getElementById('showingCount').textContent = filteredRows.length;
        renderPagination();
      }

      // ── Render tombol pagination ───────────────────────────────────────────
      function renderPagination() {
        const container = document.getElementById('pagination');
        const totalPages = Math.ceil(filteredRows.length / PER_PAGE);

        container.innerHTML = '';

        if (totalPages <= 1) return;

        const btnClass = (active) =>
          `px-3 py-1.5 rounded-lg text-sm font-medium transition-colors border ` +
          (active ?
            'bg-medical-500 text-white border-medical-500' :
            'bg-white dark:bg-surface-900 text-surface-600 dark:text-surface-300 border-surface-200 dark:border-surface-700 hover:border-medical-500'
          );

        // Tombol Prev
        const prev = document.createElement('button');
        prev.innerHTML = '&lsaquo;';
        prev.className = btnClass(false) + (currentPage === 1 ? ' opacity-40 cursor-not-allowed' : '');
        prev.disabled = currentPage === 1;
        prev.onclick = () => renderPage(currentPage - 1);
        container.appendChild(prev);

        // Nomor halaman — tampilkan maksimal 5 halaman di sekitar halaman aktif
        let startPage = Math.max(1, currentPage - 2);
        let endPage = Math.min(totalPages, startPage + 4);
        if (endPage - startPage < 4) startPage = Math.max(1, endPage - 4);

        if (startPage > 1) {
          container.appendChild(pageBtn(1));
          if (startPage > 2) container.appendChild(ellipsis());
        }

        for (let i = startPage; i <= endPage; i++) {
          container.appendChild(pageBtn(i));
        }

        if (endPage < totalPages) {
          if (endPage < totalPages - 1) container.appendChild(ellipsis());
          container.appendChild(pageBtn(totalPages));
        }

        // Tombol Next
        const next = document.createElement('button');
        next.innerHTML = '&rsaquo;';
        next.className = btnClass(false) + (currentPage === totalPages ? ' opacity-40 cursor-not-allowed' : '');
        next.disabled = currentPage === totalPages;
        next.onclick = () => renderPage(currentPage + 1);
        container.appendChild(next);
      }

      function pageBtn(n) {
        const btn = document.createElement('button');
        btn.textContent = n;
        btn.className = `px-3 py-1.5 rounded-lg text-sm font-medium transition-colors border ` +
          (n === currentPage ?
            'bg-medical-500 text-white border-medical-500' :
            'bg-white dark:bg-surface-900 text-surface-600 dark:text-surface-300 border-surface-200 dark:border-surface-700 hover:border-medical-500'
          );
        btn.onclick = () => renderPage(n);
        return btn;
      }

      function ellipsis() {
        const span = document.createElement('span');
        span.textContent = '…';
        span.className = 'px-2 text-surface-400 text-sm';
        return span;
      }

      // ── Pencarian ──────────────────────────────────────────────────────────
      function handleSearch() {
        const keyword = document.getElementById('searchInput').value.toLowerCase().trim();

        filteredRows = allRows.filter(row => {
          const name = row.dataset.name || '';
          const age = row.dataset.age || '';
          const gender = row.dataset.gender || '';
          return name.includes(keyword) || age.includes(keyword) || gender.includes(keyword);
        });

        renderPage(1); // reset ke halaman pertama setiap kali search
      }

      // ── Init ───────────────────────────────────────────────────────────────
      renderPage(1);
    </script>
  @endpush
@endsection
