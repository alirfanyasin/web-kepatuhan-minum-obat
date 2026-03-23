@extends('layouts.guest')
@section('content')
  <!-- Hero Section -->
  <section class="relative min-h-screen flex items-center pt-20 hero-gradient grid-pattern overflow-hidden">
    <!-- Floating Elements -->
    <div class="absolute top-1/4 left-10 w-20 h-20 bg-medical-500/10 rounded-full blur-2xl animate-pulse-slow"></div>
    <div class="absolute bottom-1/3 right-10 w-32 h-32 bg-medical-400/10 rounded-full blur-3xl animate-pulse-slow"
      style="animation-delay: 1s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <!-- Left Content -->
        <div class="text-center lg:text-left">
          <div
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-medical-500/10 border border-medical-500/20 mb-6">
            <span class="w-2 h-2 bg-medical-500 rounded-full pulse-ring"></span>
            <span class="text-sm font-medium text-medical-600 dark:text-medical-400">Platform Monitoring Kesehatan
              Terpercaya</span>
          </div>

          <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight leading-tight mb-6">
            Pantau Minum Obat
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-medical-500 to-medical-400">Lebih
              Mudah</span>
          </h1>

          <p class="text-lg text-surface-600 dark:text-surface-400 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed">
            Sistem monitoring pasien terintegrasi yang menghubungkan tenaga kesehatan dan pasien untuk pencapaian
            pemulihan yang optimal.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-10">
            <a href="#"
              class="inline-flex items-center justify-center gap-2 px-6 py-3.5 bg-gradient-to-r from-medical-500 to-medical-600 hover:from-medical-600 hover:to-medical-700 text-white font-semibold rounded-xl transition-all shadow-xl shadow-medical-500/25 hover:shadow-2xl hover:shadow-medical-500/30 active:scale-[0.98]">
              <span>Mulai Sekarang</span>
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
            </a>
            <a href="#"
              class="inline-flex items-center justify-center gap-2 px-6 py-3.5 bg-surface-100 dark:bg-surface-800 hover:bg-surface-200 dark:hover:bg-surface-700 font-semibold rounded-xl transition-colors border border-surface-200 dark:border-surface-700">
              <svg class="w-5 h-5 text-medical-500" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" />
              </svg>
              <span>Lihat Demo</span>
            </a>
          </div>

          <!-- Trust Badges -->
          <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start">
            <div class="flex items-center gap-1.5">
              <div class="flex -space-x-2">
                <div
                  class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 border-2 border-white dark:border-surface-900 flex items-center justify-center text-white text-xs font-bold">
                  A</div>
                <div
                  class="w-8 h-8 rounded-full bg-gradient-to-br from-green-400 to-green-600 border-2 border-white dark:border-surface-900 flex items-center justify-center text-white text-xs font-bold">
                  B</div>
                <div
                  class="w-8 h-8 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 border-2 border-white dark:border-surface-900 flex items-center justify-center text-white text-xs font-bold">
                  C</div>
                <div
                  class="w-8 h-8 rounded-full bg-gradient-to-br from-amber-400 to-amber-600 border-2 border-white dark:border-surface-900 flex items-center justify-center text-white text-xs font-bold">
                  D</div>
              </div>
              <span class="text-sm text-surface-600 dark:text-surface-400">2,500+ Nakes</span>
            </div>
            <div class="hidden sm:block w-px h-6 bg-surface-200 dark:bg-surface-700"></div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>
              <span class="text-sm text-surface-600 dark:text-surface-400">4.9/5 Rating</span>
            </div>
          </div>
        </div>

        <!-- Right - Hero Image/Mockup -->
        <div class="relative">
          <div class="relative z-10 animate-float">
            <!-- Main Card -->
            <div
              class="bg-white dark:bg-surface-900 rounded-3xl shadow-2xl shadow-surface-900/10 dark:shadow-black/50 p-2 border border-surface-200 dark:border-surface-800">
              <!-- Header -->
              <div class="bg-gradient-to-r from-medical-500 to-medical-600 rounded-2xl p-4 mb-2">
                <div class="flex items-center justify-between text-white">
                  <div>
                    <p class="text-sm opacity-80">Progress Penyembuhan</p>
                    <p class="text-2xl font-bold">78%</p>
                  </div>
                  <svg class="w-16 h-16 opacity-20" viewBox="0 0 36 36">
                    <circle cx="18" cy="18" r="15.9155" fill="none" stroke="currentColor"
                      stroke-width="3" stroke-dasharray="78, 100" transform="rotate(-90 18 18)" />
                  </svg>
                </div>
              </div>

              <!-- Content -->
              <div class="p-4 space-y-3">
                <div class="flex items-center gap-3 p-3 bg-green-500/5 rounded-xl">
                  <div class="w-10 h-10 rounded-lg bg-green-500/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="flex-1">
                    <p class="font-medium text-sm">Jalan pagi 30 menit</p>
                    <p class="text-xs text-surface-500">Selesai pukul 06:30</p>
                  </div>
                  <span class="text-xs font-medium text-green-500 bg-green-500/10 px-2 py-1 rounded-full">Done</span>
                </div>

                <div class="flex items-center gap-3 p-3 bg-surface-50 dark:bg-surface-800 rounded-xl">
                  <div class="w-10 h-10 rounded-lg bg-blue-500/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                  </div>
                  <div class="flex-1">
                    <p class="font-medium text-sm">Minum obat Amlodipine</p>
                    <p class="text-xs text-surface-500">Jadwal: 08:00</p>
                  </div>
                  <span class="text-xs font-medium text-amber-500 bg-amber-500/10 px-2 py-1 rounded-full">Pending</span>
                </div>

                <div class="flex items-center gap-3 p-3 bg-surface-50 dark:bg-surface-800 rounded-xl">
                  <div class="w-10 h-10 rounded-lg bg-purple-500/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                  </div>
                  <div class="flex-1">
                    <p class="font-medium text-sm">Aktivitas Fisik</p>
                    <p class="text-xs text-surface-500">5,240 langkah hari ini</p>
                  </div>
                  <span class="text-xs font-medium text-medical-500 bg-medical-500/10 px-2 py-1 rounded-full">Good</span>
                </div>
              </div>
            </div>

            <!-- Floating Notification -->
            <div
              class="absolute -top-4 -right-4 bg-white dark:bg-surface-900 rounded-2xl shadow-xl p-3 border border-surface-200 dark:border-surface-800 animate-pulse-slow">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <span class="text-sm font-medium">Task Selesai!</span>
              </div>
            </div>
          </div>

          <!-- Background Glow -->
          <div
            class="absolute inset-0 bg-gradient-to-r from-medical-500/20 to-medical-400/20 blur-3xl transform scale-110">
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
      <div class="flex flex-col items-center gap-2 text-surface-400">
        <span class="text-xs">Scroll</span>
        <svg class="w-5 h-5 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-16 bg-surface-50 dark:bg-surface-900/50 border-y border-surface-200 dark:border-surface-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="text-center animate-on-scroll">
          <p class="text-4xl lg:text-5xl font-display font-bold text-medical-500">2,500+</p>
          <p class="text-surface-600 dark:text-surface-400 mt-2">Tenaga Kesehatan</p>
        </div>
        <div class="text-center animate-on-scroll delay-100">
          <p class="text-4xl lg:text-5xl font-display font-bold text-medical-500">15K+</p>
          <p class="text-surface-600 dark:text-surface-400 mt-2">Pasien Terdaftar</p>
        </div>
        <div class="text-center animate-on-scroll delay-200">
          <p class="text-4xl lg:text-5xl font-display font-bold text-medical-500">98%</p>
          <p class="text-surface-600 dark:text-surface-400 mt-2">Tingkat Kepuasan</p>
        </div>
        <div class="text-center animate-on-scroll delay-300">
          <p class="text-4xl lg:text-5xl font-display font-bold text-medical-500">50+</p>
          <p class="text-surface-600 dark:text-surface-400 mt-2">Rumah Sakit Mitra</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 animate-on-scroll">
        <span class="inline-block text-sm font-semibold text-medical-500 tracking-wide uppercase mb-4">Fitur
          Unggulan</span>
        <h2 class="font-display text-3xl lg:text-4xl font-bold tracking-tight mb-4">
          Semua yang Anda butuhkan dalam satu platform
        </h2>
        <p class="text-lg text-surface-600 dark:text-surface-400">
          Fitur lengkap untuk membantu tenaga kesehatan memantau dan pasien mencapai pemulihan optimal.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        <!-- Feature 1 -->
        <div
          class="group p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 hover:border-medical-500/50 transition-all duration-300 card-shine animate-on-scroll">
          <div
            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-medical-500/20">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold mb-3">Monitoring Real-time</h3>
          <p class="text-surface-600 dark:text-surface-400 leading-relaxed">Pantau perkembangan pasien secara langsung
            dengan data yang terupdate otomatis setiap saat.</p>
        </div>

        <!-- Feature 2 -->
        <div
          class="group p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 hover:border-medical-500/50 transition-all duration-300 card-shine animate-on-scroll delay-100">
          <div
            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-blue-500/20">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold mb-3">Task List Interaktif</h3>
          <p class="text-surface-600 dark:text-surface-400 leading-relaxed">Buat daftar tugas pemulihan yang dapat
            dipantau progressnya oleh pasien dan nakes.</p>
        </div>

        <!-- Feature 3 -->
        <div
          class="group p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 hover:border-medical-500/50 transition-all duration-300 card-shine animate-on-scroll delay-200">
          <div
            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500 to-amber-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-amber-500/20">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold mb-3">Tracking Aktivitas</h3>
          <p class="text-surface-600 dark:text-surface-400 leading-relaxed">Catat dan pantau aktivitas fisik harian
            untuk memastikan gaya hidup sehat pasien.</p>
        </div>

        <!-- Feature 4 -->
        <div
          class="group p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 hover:border-medical-500/50 transition-all duration-300 card-shine animate-on-scroll delay-300">
          <div
            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-green-500/20">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold mb-3">Reminder Obat</h3>
          <p class="text-surface-600 dark:text-surface-400 leading-relaxed">Pengingat jadwal minum obat dengan
            notifikasi untuk memastikan kepatuhan pengobatan.</p>
        </div>

        <!-- Feature 5 -->
        <div
          class="group p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 hover:border-medical-500/50 transition-all duration-300 card-shine animate-on-scroll delay-400">
          <div
            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/20">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold mb-3">Progress Report</h3>
          <p class="text-surface-600 dark:text-surface-400 leading-relaxed">Laporan perkembangan visual yang mudah
            dipahami untuk evaluasi penyembuhan.</p>
        </div>

        <!-- Feature 6 -->
        <div
          class="group p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 hover:border-medical-500/50 transition-all duration-300 card-shine animate-on-scroll delay-500">
          <div
            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-rose-500 to-rose-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-rose-500/20">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold mb-3">Data Aman</h3>
          <p class="text-surface-600 dark:text-surface-400 leading-relaxed">Keamanan data terjamin dengan enkripsi
            standar kesehatan dan privasi terjaga.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section id="how-it-works" class="py-20 lg:py-32 bg-surface-50 dark:bg-surface-900/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 animate-on-scroll">
        <span class="inline-block text-sm font-semibold text-medical-500 tracking-wide uppercase mb-4">Cara
          Kerja</span>
        <h2 class="font-display text-3xl lg:text-4xl font-bold tracking-tight mb-4">
          Mulai dalam 3 langkah sederhana
        </h2>
        <p class="text-lg text-surface-600 dark:text-surface-400">
          Proses mudah untuk tenaga kesehatan dan pasien dalam menggunakan platform.
        </p>
      </div>

      <div class="grid lg:grid-cols-3 gap-8 relative">
        <!-- Connecting Line (Desktop) -->
        <div
          class="hidden lg:block absolute top-20 left-1/6 right-1/6 h-0.5 bg-gradient-to-r from-medical-500/20 via-medical-500 to-medical-500/20">
        </div>

        <!-- Step 1 -->
        <div class="relative text-center animate-on-scroll">
          <div
            class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white text-2xl font-display font-bold mb-6 shadow-xl shadow-medical-500/25">
            1
          </div>
          <h3 class="font-display text-xl font-bold mb-3">Daftar Akun</h3>
          <p class="text-surface-600 dark:text-surface-400">
            Nakes dan pasien mendaftar dengan email dan pilih peran masing-masing.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="relative text-center animate-on-scroll delay-200">
          <div
            class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white text-2xl font-display font-bold mb-6 shadow-xl shadow-medical-500/25">
            2
          </div>
          <h3 class="font-display text-xl font-bold mb-3">Koneksi Nakes-Pasien</h3>
          <p class="text-surface-600 dark:text-surface-400">
            Pasien terhubung dengan nakes untuk memulai program pemulihan.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="relative text-center animate-on-scroll delay-400">
          <div
            class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-medical-500 to-medical-600 flex items-center justify-center text-white text-2xl font-display font-bold mb-6 shadow-xl shadow-medical-500/25">
            3
          </div>
          <h3 class="font-display text-xl font-bold mb-3">Mulai Monitoring</h3>
          <p class="text-surface-600 dark:text-surface-400">
            Nakes memberikan task dan pasien menjalankan program pemulihan.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="py-20 lg:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
        <span class="inline-block text-sm font-semibold text-medical-500 tracking-wide uppercase mb-4">Testimoni</span>
        <h2 class="font-display text-3xl lg:text-4xl font-bold tracking-tight mb-4">
          Dipercaya oleh ribuan profesional
        </h2>
        <p class="text-lg text-surface-600 dark:text-surface-400">
          Lihat bagaimana MediCare Pro membantu tenaga kesehatan dan pasien.
        </p>
      </div>

      <!-- Slider Container -->
      <div class="relative" id="testimonialWrapper">
        <div id="testimonialSlider" class="flex transition-transform duration-500 ease-in-out">

          <!-- Testimonial 1 -->
          <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
            <div
              class="h-full p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800">
              <div class="flex items-center gap-1 mb-4">
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
              <p class="text-surface-600 dark:text-surface-400 mb-6 leading-relaxed">
                "Platform ini sangat membantu saya memantau puluhan pasien dengan lebih efisien. Fitur task list membuat
                komunikasi dengan pasien jadi lebih terstruktur."
              </p>
              <div class="flex items-center gap-3">
                <div
                  class="w-12 h-12 rounded-full bg-gradient-to-br from-medical-400 to-medical-600 flex items-center justify-center text-white font-bold">
                  DR</div>
                <div>
                  <p class="font-semibold">Dr. Rahayu Santoso</p>
                  <p class="text-sm text-surface-500">Dokter Spesialis Penyakit Dalam</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 2 -->
          <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
            <div
              class="h-full p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800">
              <div class="flex items-center gap-1 mb-4">
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
              <p class="text-surface-600 dark:text-surface-400 mb-6 leading-relaxed">
                "Saya jadi lebih disiplin minum obat dan jalan pagi setelah menggunakan aplikasi ini. Dokter juga bisa
                langsung kasih motivasi lewat fitur monitoring."
              </p>
              <div class="flex items-center gap-3">
                <div
                  class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold">
                  AS</div>
                <div>
                  <p class="font-semibold">Ahmad Syafii</p>
                  <p class="text-sm text-surface-500">Pasien Hipertensi</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 3 -->
          <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
            <div
              class="h-full p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800">
              <div class="flex items-center gap-1 mb-4">
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
              <p class="text-surface-600 dark:text-surface-400 mb-6 leading-relaxed">
                "Sebagai perawat, saya bisa memantau kondisi pasien secara berkala tanpa harus selalu bertatap muka.
                Efisiensi waktu kerja meningkat drastis."
              </p>
              <div class="flex items-center gap-3">
                <div
                  class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center text-white font-bold">
                  SW</div>
                <div>
                  <p class="font-semibold">Siti Wulandari</p>
                  <p class="text-sm text-surface-500">Perawat Senior</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 4 -->
          <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
            <div
              class="h-full p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800">
              <div class="flex items-center gap-1 mb-4">
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
              <p class="text-surface-600 dark:text-surface-400 mb-6 leading-relaxed">
                "Fitur reminder obat sangat membantu pasien lansia seperti saya. Anak saya juga bisa pantau kondisi
                kesehatan saya dari jarak jauh. Luar biasa!"
              </p>
              <div class="flex items-center gap-3">
                <div
                  class="w-12 h-12 rounded-full bg-gradient-to-br from-rose-400 to-rose-600 flex items-center justify-center text-white font-bold">
                  BH</div>
                <div>
                  <p class="font-semibold">Budi Hartono</p>
                  <p class="text-sm text-surface-500">Pasien Diabetes</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 5 -->
          <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
            <div
              class="h-full p-6 lg:p-8 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800">
              <div class="flex items-center gap-1 mb-4">
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
              <p class="text-surface-600 dark:text-surface-400 mb-6 leading-relaxed">
                "Aplikasi yang sangat user-friendly. Saya tidak perlu repot mencatat manual lagi. Semua data tersimpan
                rapi dan bisa diakses kapan saja."
              </p>
              <div class="flex items-center gap-3">
                <div
                  class="w-12 h-12 rounded-full bg-gradient-to-br from-cyan-400 to-cyan-600 flex items-center justify-center text-white font-bold">
                  RP</div>
                <div>
                  <p class="font-semibold">Rina Permata</p>
                  <p class="text-sm text-surface-500">Pasien Asma</p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Slider Navigation Dots -->
        <div class="flex justify-center gap-2 mt-8" id="sliderDots">
          <!-- Dots generated by JS -->
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div
        class="relative overflow-hidden bg-gradient-to-br from-medical-500 to-medical-700 rounded-3xl p-8 lg:p-16 text-center animate-on-scroll">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
          <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
              <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5" />
              </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />
          </svg>
        </div>

        <div class="relative z-10">
          <h2 class="font-display text-3xl lg:text-4xl font-bold text-white mb-4">
            Siap Memulai Perjalanan Pemulihan?
          </h2>
          <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">
            Bergabung dengan ribuan tenaga kesehatan dan pasien yang telah merasakan manfaat MediCare Pro.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#"
              class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-medical-600 font-semibold rounded-xl hover:bg-surface-50 transition-colors shadow-xl active:scale-[0.98]">
              Daftar Gratis Sekarang
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
            </a>
            <a href="#"
              class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 text-white font-semibold rounded-xl hover:bg-white/20 transition-colors border border-white/20">
              Hubungi Sales
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
