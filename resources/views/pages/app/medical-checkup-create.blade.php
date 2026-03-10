@extends('layouts.app')
@section('content')
  <!-- Main Content -->
  <main class="pb-16 px-4">
    <div class="max-w-4xl mx-auto">
      <!-- Hero Section -->
      <div class="text-center mb-12 animate-slide-up">
        <div
          class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-medical-100 dark:bg-medical-900/30 text-medical-700 dark:text-medical-300 text-sm font-medium mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          Formulir Pemeriksaan Kesehatan
        </div>
        <h1 class="font-display text-4xl md:text-5xl font-bold text-surface-900 dark:text-white mb-4">
          Medical Check Up
        </h1>
        <p class="text-lg text-surface-600 dark:text-surface-300 max-w-2xl mx-auto">
          Skrining Kesehatan untuk Hipertensi dan Diabetes Mellitus
        </p>
      </div>

      <!-- Form Container -->
      <form id="medical-form" class="space-y-6">

        <!-- Section 1: Identitas Responden -->
        <section
          class="section-card p-6 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 shadow-sm">
          <div class="flex items-center gap-3 mb-6">
            <div
              class="w-10 h-10 rounded-xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white font-bold">
              1</div>
            <div>
              <h2 class="font-display text-xl font-bold text-surface-900 dark:text-white">Identitas Pasien</h2>
              <p class="text-sm text-surface-500 dark:text-surface-400">Data diri peserta pemeriksaan</p>
            </div>
          </div>

          <div class="grid md:grid-cols-2 gap-4">
            <div class="md:col-span-2">
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Nama Lengkap</label>
              <input type="text" name="nama" required
                class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500"
                placeholder="Masukkan nama lengkap" value="{{ $data->name }}">
            </div>

            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Tanggal Lahir</label>
              <div class="relative">
                <input type="date" name="tanggal_lahir" required
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500"
                  placeholder="Contoh: 45">
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Jenis Kelamin</label>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-3 p-4 rounded-xl border border-surface-300 dark:border-surface-700 cursor-pointer">
                  <input type="radio" name="jenis_kelamin" value="laki-laki"
                    class="w-4 h-4 text-medical-500 focus:ring-medical-400" required>
                  <span class="text-surface-700 dark:text-surface-300">Laki-laki</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-3 p-4 rounded-xl border border-surface-300 dark:border-surface-700 cursor-pointer">
                  <input type="radio" name="jenis_kelamin" value="perempuan"
                    class="w-4 h-4 text-medical-500 focus:ring-medical-400">
                  <span class="text-surface-700 dark:text-surface-300">Perempuan</span>
                </label>
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">NIK</label>
              <div class="relative">
                <input type="number" name="nik" required
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500"
                  placeholder="Contoh: 12345678901234567">
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Alamat</label>
              <div class="relative">
                <input type="text" name="alamat" required
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500"
                  placeholder="Contoh: Jl. Merdeka No. 123, Jakarta">
              </div>
            </div>
          </div>
        </section>

        <!-- Section 2: Pemeriksaan Tekanan Darah -->
        <section
          class="section-card p-6 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 shadow-sm">
          <div class="flex items-center gap-3 mb-6">
            <div
              class="w-10 h-10 rounded-xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white font-bold">
              2</div>
            <div>
              <h2 class="font-display text-xl font-bold text-surface-900 dark:text-white">Pemeriksaan Tekanan Darah</h2>
              <p class="text-sm text-surface-500 dark:text-surface-400">Pengukuran tekanan darah arterial</p>
            </div>
          </div>

          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Tekanan Darah
                Sistolik</label>
              <div class="relative">
                <input type="number" name="sistolik" min="60" max="250"
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500 pr-16"
                  placeholder="Contoh: 120">
                <span
                  class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">mmHg</span>
              </div>
              <p class="mt-1 text-xs text-surface-400 dark:text-surface-500">Normal: 90-120 mmHg</p>
            </div>

            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Tekanan Darah
                Diastolik</label>
              <div class="relative">
                <input type="number" name="diastolik" min="40" max="150"
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500 pr-16"
                  placeholder="Contoh: 80">
                <span
                  class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">mmHg</span>
              </div>
              <p class="mt-1 text-xs text-surface-400 dark:text-surface-500">Normal: 60-80 mmHg</p>
            </div>
          </div>

          <!-- Blood Pressure Status Indicator -->
          <div id="bp-status" class="mt-4 p-4 rounded-xl bg-surface-100 dark:bg-surface-800 hidden">
            <div class="flex items-center gap-3">
              <div id="bp-icon" class="w-8 h-8 rounded-full flex items-center justify-center"></div>
              <div>
                <p id="bp-label" class="font-semibold"></p>
                <p id="bp-desc" class="text-sm text-surface-500 dark:text-surface-400"></p>
              </div>
            </div>
          </div>
        </section>

        <!-- Section 3: Status Antropometri -->
        <section
          class="section-card p-6 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 shadow-sm">
          <div class="flex items-center gap-3 mb-6">
            <div
              class="w-10 h-10 rounded-xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white font-bold">
              3</div>
            <div>
              <h2 class="font-display text-xl font-bold text-surface-900 dark:text-white">Status Antropometri</h2>
              <p class="text-sm text-surface-500 dark:text-surface-400">Pengukuran fisik tubuh</p>
            </div>
          </div>

          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Berat Badan</label>
              <div class="relative">
                <input type="number" name="berat_badan" id="berat_badan" min="20" max="300"
                  step="0.1"
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500 pr-12"
                  placeholder="Contoh: 70">
                <span
                  class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">kg</span>
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Tinggi Badan</label>
              <div class="relative">
                <input type="number" name="tinggi_badan" id="tinggi_badan" min="100" max="250"
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500 pr-12"
                  placeholder="Contoh: 170">
                <span
                  class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">cm</span>
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Indeks Massa Tubuh
                (IMT)</label>
              <div class="relative">
                <input type="text" name="imt" id="imt" readonly
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 bg-surface-100 dark:bg-surface-800 dark:text-white pr-16"
                  placeholder="Otomatis">
                <span
                  class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">kg/m2</span>
              </div>
              <p id="imt-status" class="mt-1 text-xs"></p>
            </div>

            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Lingkar Perut</label>
              <div class="relative">
                <input type="number" name="lingkar_perut" min="40" max="200"
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500 pr-12"
                  placeholder="Contoh: 90">
                <span
                  class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">cm</span>
              </div>
              <p class="mt-1 text-xs text-surface-400 dark:text-surface-500">Normal: Laki-laki &lt;90cm, Perempuan
                &lt;80cm</p>
            </div>
          </div>
        </section>

        <!-- Section 4: Pemeriksaan Gula Darah -->
        <section
          class="section-card p-6 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 shadow-sm">
          <div class="flex items-center gap-3 mb-6">
            <div
              class="w-10 h-10 rounded-xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white font-bold">
              4</div>
            <div>
              <h2 class="font-display text-xl font-bold text-surface-900 dark:text-white">Pemeriksaan Gula Darah</h2>
              <p class="text-sm text-surface-500 dark:text-surface-400">Kadar glukosa dalam darah</p>
            </div>
          </div>

          <div class="grid md:grid-cols-3 gap-4">
            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Gula Darah
                Puasa</label>
              <div class="relative">
                <input type="number" name="gula_puasa" min="30" max="600"
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500 pr-16"
                  placeholder="Contoh: 100">
                <span
                  class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">mg/dL</span>
              </div>
              <p class="mt-1 text-xs text-surface-400 dark:text-surface-500">Normal: 70-100 mg/dL</p>
            </div>

            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Gula Darah
                Sewaktu</label>
              <div class="relative">
                <input type="number" name="gula_sewaktu" min="30" max="600"
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500 pr-16"
                  placeholder="Contoh: 140">
                <span
                  class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">mg/dL</span>
              </div>
              <p class="mt-1 text-xs text-surface-400 dark:text-surface-500">Normal: &lt;200 mg/dL</p>
            </div>

            <div>
              <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">HbA1c <span
                  class="text-surface-400">(opsional)</span></label>
              <div class="relative">
                <input type="number" name="hba1c" min="3" max="15" step="0.1"
                  class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500 pr-10"
                  placeholder="Contoh: 5.5">
                <span
                  class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">%</span>
              </div>
              <p class="mt-1 text-xs text-surface-400 dark:text-surface-500">Normal: &lt;5.7%</p>
            </div>
          </div>
        </section>

        <!-- Section 5: Pemeriksaan Kolesterol -->
        <section
          class="section-card p-6 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 shadow-sm">
          <div class="flex items-center gap-3 mb-6">
            <div
              class="w-10 h-10 rounded-xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white font-bold">
              5</div>
            <div>
              <h2 class="font-display text-xl font-bold text-surface-900 dark:text-white">Pemeriksaan Kolesterol</h2>
              <p class="text-sm text-surface-500 dark:text-surface-400">Profil lipid tubuh</p>
            </div>
          </div>

          <div class="max-w-sm">
            <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Kolesterol Total</label>
            <div class="relative">
              <input type="number" name="kolesterol_total" min="50" max="500"
                class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500 pr-16"
                placeholder="Contoh: 180">
              <span
                class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">mg/dL</span>
            </div>
            <p class="mt-1 text-xs text-surface-400 dark:text-surface-500">Normal: &lt;200 mg/dL</p>
          </div>
        </section>

        <!-- Section 6: Pemeriksaan Fungsi Ginjal -->
        <section
          class="section-card p-6 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 shadow-sm">
          <div class="flex items-center gap-3 mb-6">
            <div
              class="w-10 h-10 rounded-xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white font-bold">
              6</div>
            <div>
              <h2 class="font-display text-xl font-bold text-surface-900 dark:text-white">Pemeriksaan Fungsi Ginjal</h2>
              <p class="text-sm text-surface-500 dark:text-surface-400">Evaluasi fungsi ginjal</p>
            </div>
          </div>

          <div class="max-w-sm">
            <label class="block text-sm font-medium text-surface-700 dark:text-surface-300 mb-2">Kreatinin</label>
            <div class="relative">
              <input type="number" name="kreatinin" min="0.1" max="20" step="0.01"
                class="input-field w-full p-4 rounded-xl border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white placeholder-surface-400 dark:placeholder-surface-500 pr-16"
                placeholder="Contoh: 1.0">
              <span
                class="absolute right-4 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">mg/dL</span>
            </div>
            <p class="mt-1 text-xs text-surface-400 dark:text-surface-500">Normal: 0.7-1.3 mg/dL</p>
          </div>
        </section>

        <!-- Section 7: Riwayat Penyakit Sebelumnya -->
        <section
          class="section-card p-6 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 shadow-sm">
          <div class="flex items-center gap-3 mb-6">
            <div
              class="w-10 h-10 rounded-xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white font-bold">
              7</div>
            <div>
              <h2 class="font-display text-xl font-bold text-surface-900 dark:text-white">Riwayat Penyakit Sebelumnya
              </h2>
              <p class="text-sm text-surface-500 dark:text-surface-400">Historis kesehatan responden</p>
            </div>
          </div>

          <div class="space-y-6">
            <!-- Diagnosis Hipertensi -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda pernah didiagnosis
                Hipertensi oleh tenaga kesehatan?</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="riwayat_hipertensi" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="riwayat_hipertensi" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>

            <!-- Diagnosis Diabetes -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda pernah didiagnosis
                Diabetes Mellitus oleh tenaga kesehatan?</p>
              <div class="flex gap-3 mb-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="riwayat_diabetes" id="diabetes-ya" value="ya"
                    class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="riwayat_diabetes" id="diabetes-tidak" value="tidak"
                    class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
              <div id="diabetes-tahun" class="hidden">
                <label class="block text-xs text-surface-500 dark:text-surface-400 mb-1">Jika Ya, sejak kapan
                  didiagnosis?</label>
                <div class="relative max-w-[150px]">
                  <input type="number" name="tahun_diagnosis" min="1950" max="2025"
                    class="input-field w-full p-3 rounded-lg border border-surface-300 dark:border-surface-600 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white pr-16"
                    placeholder="2020">
                  <span
                    class="absolute right-3 top-1/2 -translate-y-1/2 text-surface-400 dark:text-surface-500 text-sm">tahun</span>
                </div>
              </div>
            </div>

            <!-- Konsumsi Obat -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda sedang mengonsumsi
                obat untuk hipertensi atau diabetes?</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="konsumsi_obat" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="konsumsi_obat" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>

            <!-- Kontrol Rutin -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda rutin kontrol ke
                fasilitas kesehatan (puskesmas/klinik/rumah sakit)?</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="kontrol_rutin" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="kontrol_rutin" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>

            <!-- Riwayat Keluarga -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah keluarga inti (orang tua
                atau saudara kandung) memiliki riwayat:</p>
              <div class="space-y-3">
                <div class="flex items-center justify-between">
                  <span class="text-sm text-surface-600 dark:text-surface-400">Hipertensi</span>
                  <div class="flex gap-2">
                    <label
                      class="radio-card flex items-center gap-1 px-3 py-2 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer text-xs">
                      <input type="radio" name="keluarga_hipertensi" value="ya"
                        class="w-3 h-3 text-medical-500">
                      <span class="text-surface-700 dark:text-surface-300">Ya</span>
                    </label>
                    <label
                      class="radio-card flex items-center gap-1 px-3 py-2 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer text-xs">
                      <input type="radio" name="keluarga_hipertensi" value="tidak"
                        class="w-3 h-3 text-medical-500">
                      <span class="text-surface-700 dark:text-surface-300">Tidak</span>
                    </label>
                  </div>
                </div>
                <div class="flex items-center justify-between">
                  <span class="text-sm text-surface-600 dark:text-surface-400">Diabetes Mellitus</span>
                  <div class="flex gap-2">
                    <label
                      class="radio-card flex items-center gap-1 px-3 py-2 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer text-xs">
                      <input type="radio" name="keluarga_diabetes" value="ya" class="w-3 h-3 text-medical-500">
                      <span class="text-surface-700 dark:text-surface-300">Ya</span>
                    </label>
                    <label
                      class="radio-card flex items-center gap-1 px-3 py-2 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer text-xs">
                      <input type="radio" name="keluarga_diabetes" value="tidak" class="w-3 h-3 text-medical-500">
                      <span class="text-surface-700 dark:text-surface-300">Tidak</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Section 8: Faktor Risiko -->
        <section
          class="section-card p-6 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 shadow-sm">
          <div class="flex items-center gap-3 mb-6">
            <div
              class="w-10 h-10 rounded-xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white font-bold">
              8</div>
            <div>
              <h2 class="font-display text-xl font-bold text-surface-900 dark:text-white">Faktor Risiko</h2>
              <p class="text-sm text-surface-500 dark:text-surface-400">Evaluasi gaya hidup dan kebiasaan</p>
            </div>
          </div>

          <div class="space-y-4">
            <!-- Merokok -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda merokok?</p>
              <div class="flex gap-3 mb-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="merokok" id="merokok-ya" value="ya"
                    class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="merokok" id="merokok-tidak" value="tidak"
                    class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
              <div id="rokok-detail" class="hidden">
                <label class="block text-xs text-surface-500 dark:text-surface-400 mb-1">Jika Ya, berapa batang per
                  hari?</label>
                <input type="number" name="batang_per_hari" min="1" max="100"
                  class="input-field w-full max-w-[150px] p-3 rounded-lg border border-surface-300 dark:border-surface-600 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
                  placeholder="10">
              </div>
            </div>

            <!-- Makanan Tinggi Garam -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda sering mengonsumsi
                makanan tinggi garam?</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="garam_tinggi" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="garam_tinggi" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>

            <!-- Makanan Manis -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda sering mengonsumsi
                makanan/minuman manis?</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="manis" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="manis" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>

            <!-- Olahraga -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda jarang berolahraga
                (kurang dari 3 kali seminggu)?</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="jarang_olahraga" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="jarang_olahraga" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>

            <!-- Obesitas -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda memiliki berat badan
                berlebih / obesitas?</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="obesitas" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="obesitas" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>

            <!-- Stres -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda sering mengalami
                stres?</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="stres" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="stres" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>

            <!-- Lingkar Perut Berlebih -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah Anda memiliki lingkar
                perut berlebih?</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="perut_berlebih" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="perut_berlebih" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>

            <!-- Alkohol -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Konsumsi alkohol rutin</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="alkohol" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="alkohol" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>

            <!-- Kualitas Tidur -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-medium text-surface-700 dark:text-surface-300 mb-3">Apakah sering mendengkur atau
                kurang tidur?</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="kualitas_tidur" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="kualitas_tidur" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>
          </div>
        </section>

        <!-- Section 9: Gejala Klinis -->
        <section
          class="section-card p-6 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 shadow-sm">
          <div class="flex items-center gap-3 mb-6">
            <div
              class="w-10 h-10 rounded-xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white font-bold">
              9</div>
            <div>
              <h2 class="font-display text-xl font-bold text-surface-900 dark:text-white">Gejala Klinis</h2>
              <p class="text-sm text-surface-500 dark:text-surface-400">Tanda dan gejala yang dialami</p>
            </div>
          </div>

          <div class="space-y-4">
            <!-- Gejala Klasik -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-semibold text-surface-700 dark:text-surface-300 mb-4">Gejala Klasik Diabetes</p>
              <div class="space-y-3">
                <div class="flex items-center justify-between">
                  <span class="text-sm text-surface-600 dark:text-surface-400">Sering haus (polidipsi)</span>
                  <div class="flex gap-2">
                    <label
                      class="radio-card flex items-center gap-1 px-3 py-2 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer text-xs">
                      <input type="radio" name="polidipsi" value="ya" class="w-3 h-3 text-medical-500">
                      <span class="text-surface-700 dark:text-surface-300">Ya</span>
                    </label>
                    <label
                      class="radio-card flex items-center gap-1 px-3 py-2 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer text-xs">
                      <input type="radio" name="polidipsi" value="tidak" class="w-3 h-3 text-medical-500">
                      <span class="text-surface-700 dark:text-surface-300">Tidak</span>
                    </label>
                  </div>
                </div>
                <div class="flex items-center justify-between">
                  <span class="text-sm text-surface-600 dark:text-surface-400">Sering lapar (polifagi)</span>
                  <div class="flex gap-2">
                    <label
                      class="radio-card flex items-center gap-1 px-3 py-2 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer text-xs">
                      <input type="radio" name="polifagi" value="ya" class="w-3 h-3 text-medical-500">
                      <span class="text-surface-700 dark:text-surface-300">Ya</span>
                    </label>
                    <label
                      class="radio-card flex items-center gap-1 px-3 py-2 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer text-xs">
                      <input type="radio" name="polifagi" value="tidak" class="w-3 h-3 text-medical-500">
                      <span class="text-surface-700 dark:text-surface-300">Tidak</span>
                    </label>
                  </div>
                </div>
                <div class="flex items-center justify-between">
                  <span class="text-sm text-surface-600 dark:text-surface-400">Sering kencing di malam hari
                    (poliuri)</span>
                  <div class="flex gap-2">
                    <label
                      class="radio-card flex items-center gap-1 px-3 py-2 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer text-xs">
                      <input type="radio" name="poliuri" value="ya" class="w-3 h-3 text-medical-500">
                      <span class="text-surface-700 dark:text-surface-300">Ya</span>
                    </label>
                    <label
                      class="radio-card flex items-center gap-1 px-3 py-2 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer text-xs">
                      <input type="radio" name="poliuri" value="tidak" class="w-3 h-3 text-medical-500">
                      <span class="text-surface-700 dark:text-surface-300">Tidak</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <!-- Berat Badan -->
            <div class="p-4 rounded-xl bg-surface-50 dark:bg-surface-800/50">
              <p class="text-sm font-semibold text-surface-700 dark:text-surface-300 mb-3">Penurunan Berat Badan</p>
              <p class="text-sm text-surface-600 dark:text-surface-400 mb-3">Penurunan berat badan drastis tanpa sebab
                yang jelas</p>
              <div class="flex gap-3">
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="penurunan_bb" value="ya" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Ya</span>
                </label>
                <label
                  class="radio-card flex-1 flex items-center gap-2 p-3 rounded-lg border border-surface-300 dark:border-surface-600 cursor-pointer">
                  <input type="radio" name="penurunan_bb" value="tidak" class="w-4 h-4 text-medical-500">
                  <span class="text-sm text-surface-700 dark:text-surface-300">Tidak</span>
                </label>
              </div>
            </div>
          </div>
        </section>

        <!-- Submit Button -->
        <div class="section-card flex flex-col sm:flex-row gap-4 pt-4">
          <button type="button" id="save-draft"
            class="flex-1 px-6 py-4 rounded-xl border-2 border-surface-300 dark:border-surface-700 text-surface-700 dark:text-surface-300 font-semibold hover:bg-surface-100 dark:hover:bg-surface-800 transition-all focus:outline-none focus:ring-2 focus:ring-medical-400 focus:ring-offset-2">
            Simpan Draft
          </button>
          <button type="submit"
            class="flex-1 px-6 py-4 rounded-xl bg-gradient-to-r from-medical-500 to-medical-600 text-white font-semibold hover:from-medical-600 hover:to-medical-700 transition-all shadow-lg shadow-medical-500/25 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:ring-offset-2">
            Kirim Data Pemeriksaan
          </button>
        </div>
      </form>
    </div>
  </main>
@endsection
