<aside id="sidebar"
  class="fixed left-0 top-0 h-full w-72 z-50
                              bg-white dark:bg-surface-900 border-r border-surface-200 dark:border-surface-800
                              transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-out
                              flex flex-col">

  <!-- Logo -->
  <div class="h-16 flex items-center justify-between px-5 border-b border-surface-200 dark:border-surface-800 shrink-0">
    <div class="flex items-center gap-3">
      <div
        class="w-10 h-10 rounded-xl bg-gradient-to-r from-medical-500 to-medical-700 flex items-center justify-center shadow-lg shadow-medical-500/20">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
      </div>
      <div>
        <h1 class="font-display font-bold text-lg tracking-tight">Medi<span class="text-medical-500">Care</span></h1>
        <p class="text-xs text-surface-500">Hospital System</p>
      </div>
    </div>
    <button onclick="toggleSidebar()"
      class="lg:hidden p-2 rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 focus-ring"
      aria-label="Close sidebar">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Navigation -->
  <nav class="flex-1 overflow-y-auto p-4 space-y-1">
    <!-- Dashboard -->
    <a href="{{ route('dashboard') }}"
      class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-xl {{ Request::is('app/dashboard') ? 'active bg-medical-500/10 text-medical-600 dark:text-medical-400 font-semibold' : 'hover:bg-surface-100 dark:hover:bg-surface-800 text-surface-600 dark:text-surface-400 transition-colors focus-ring font-medium' }}">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
      </svg>
      <span>Dashboard</span>
    </a>


    @hasrole('patient')
      <a href="{{ route('medical-checkup.index', ['id' => auth()->user()->id]) }}"
        class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-xl {{ Request::is('app/patients/*') || Request::is('app/patients') ? 'active bg-medical-500/10 text-medical-600 dark:text-medical-400 font-semibold' : 'hover:bg-surface-100 dark:hover:bg-surface-800 text-surface-600 dark:text-surface-400 transition-colors focus-ring font-medium' }}">
        <iconify-icon icon="streamline:checkup-medical-report-clipboard" width="20" height="20"></iconify-icon>
        <span>Hasil Pemeriksaan</span>
      </a>
    @endrole

    @hasrole('doctor')

      <a href="{{ route('patients.index') }}"
        class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-xl {{ Request::is('app/patients/*') || Request::is('app/patients') ? 'active bg-medical-500/10 text-medical-600 dark:text-medical-400 font-semibold' : 'hover:bg-surface-100 dark:hover:bg-surface-800 text-surface-600 dark:text-surface-400 transition-colors focus-ring font-medium' }}">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span>Pasien</span>
      </a>

      <!-- Doctors -->
      <a href="{{ route('doctor.index') }}"
        class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-xl {{ Request::is('app/doctors/*') || Request::is('app/doctors') ? 'active bg-medical-500/10 text-medical-600 dark:text-medical-400 font-semibold' : 'hover:bg-surface-100 dark:hover:bg-surface-800 text-surface-600 dark:text-surface-400 transition-colors focus-ring font-medium' }}">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Dokter</span>
      </a>
    @endhasrole

    <!-- Patients Dropdown -->
    {{-- <div class="dropdown">
      <button onclick="toggleDropdown(this)"
        class="w-full sidebar-link flex items-center justify-between gap-3 px-4 py-3 rounded-xl hover:bg-surface-100 dark:hover:bg-surface-800 text-surface-600 dark:text-surface-400 font-medium transition-colors focus-ring">
        <div class="flex items-center gap-3">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <span>Pasien</span>
        </div>
        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div class="dropdown-menu pl-12 pt-1 space-y-1">
        <a href="{{ route('patients.index') }}"
          class="block py-2 px-3 rounded-lg text-sm text-surface-600 dark:text-surface-400 hover:bg-surface-100 dark:hover:bg-surface-800 hover:text-medical-600 transition-colors">Semua
          Pasien</a>
        <a href="#"
          class="block py-2 px-3 rounded-lg text-sm text-surface-600 dark:text-surface-400 hover:bg-surface-100 dark:hover:bg-surface-800 hover:text-medical-600 transition-colors">Medical
          Checkups</a>
        <a href="{{ route('todolist-management') }}"
          class="block py-2 px-3 rounded-lg text-sm text-surface-600 dark:text-surface-400 hover:bg-surface-100 dark:hover:bg-surface-800 hover:text-medical-600 transition-colors">To-Do
          List</a>
       
      </div>
    </div> --}}

    <!-- Appointments Dropdown -->
    {{-- <div class="dropdown">
      <button onclick="toggleDropdown(this)"
        class="w-full sidebar-link flex items-center justify-between gap-3 px-4 py-3 rounded-xl hover:bg-surface-100 dark:hover:bg-surface-800 text-surface-600 dark:text-surface-400 font-medium transition-colors focus-ring">
        <div class="flex items-center gap-3">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          <span>Appointments</span>
        </div>
        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div class="dropdown-menu pl-12 pt-1 space-y-1">
        <a href="#"
          class="block py-2 px-3 rounded-lg text-sm text-surface-600 dark:text-surface-400 hover:bg-surface-100 dark:hover:bg-surface-800 hover:text-medical-600 transition-colors">Today's
          Schedule</a>
        <a href="#"
          class="block py-2 px-3 rounded-lg text-sm text-surface-600 dark:text-surface-400 hover:bg-surface-100 dark:hover:bg-surface-800 hover:text-medical-600 transition-colors">Upcoming</a>
        <a href="#"
          class="block py-2 px-3 rounded-lg text-sm text-surface-600 dark:text-surface-400 hover:bg-surface-100 dark:hover:bg-surface-800 hover:text-medical-600 transition-colors">Walk-in</a>
      </div>
    </div> --}}



    <!-- Departments Dropdown -->
    {{-- <div class="dropdown">
      <button onclick="toggleDropdown(this)"
        class="w-full sidebar-link flex items-center justify-between gap-3 px-4 py-3 rounded-xl hover:bg-surface-100 dark:hover:bg-surface-800 text-surface-600 dark:text-surface-400 font-medium transition-colors focus-ring">
        <div class="flex items-center gap-3">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg>
          <span>Departments</span>
        </div>
        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div class="dropdown-menu pl-12 pt-1 space-y-1">
        <a href="#"
          class="block py-2 px-3 rounded-lg text-sm text-surface-600 dark:text-surface-400 hover:bg-surface-100 dark:hover:bg-surface-800 hover:text-medical-600 transition-colors">Cardiology</a>
        <a href="#"
          class="block py-2 px-3 rounded-lg text-sm text-surface-600 dark:text-surface-400 hover:bg-surface-100 dark:hover:bg-surface-800 hover:text-medical-600 transition-colors">Neurology</a>
        <a href="#"
          class="block py-2 px-3 rounded-lg text-sm text-surface-600 dark:text-surface-400 hover:bg-surface-100 dark:hover:bg-surface-800 hover:text-medical-600 transition-colors">Orthopedics</a>
        <a href="#"
          class="block py-2 px-3 rounded-lg text-sm text-surface-600 dark:text-surface-400 hover:bg-surface-100 dark:hover:bg-surface-800 hover:text-medical-600 transition-colors">Pediatrics</a>
      </div>
    </div> --}}

    <!-- Pharmacy -->
    {{-- <a href="#"
      class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-100 dark:hover:bg-surface-800 text-surface-600 dark:text-surface-400 font-medium transition-colors focus-ring">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
      </svg>
      <span>Pharmacy</span>
    </a> --}}

    <!-- Laboratory -->
    {{-- <a href="#"
      class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-100 dark:hover:bg-surface-800 text-surface-600 dark:text-surface-400 font-medium transition-colors focus-ring">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
      </svg>
      <span>Laboratory</span>
    </a> --}}

    <!-- Divider -->
    <div class="my-3 border-t border-surface-200 dark:border-surface-800"></div>

    <!-- Settings -->
    <a href="{{ route('settings.index') }}"
      class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-xl {{ Request::is('app/settings') ? 'active bg-medical-500/10 text-medical-600 dark:text-medical-400 font-semibold' : 'hover:bg-surface-100 dark:hover:bg-surface-800 text-surface-600 dark:text-surface-400 transition-colors focus-ring font-medium' }}">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg>
      <span>Pengaturan</span>
    </a>
  </nav>

  <!-- User Profile -->
  <div class="p-4 border-t border-surface-200 dark:border-surface-800 shrink-0">
    <div class="flex items-center justify-between p-3 rounded-xl bg-surface-50 dark:bg-surface-800">
      <div class="flex gap-3 items-center">
        <img src="{{ auth()->user()->avatar }}" alt="User Avatar"
          class="w-10 h-10 rounded-full bg-gradient-to-br from-medical-400 to-medical-600 flex items-center justify-center text-white font-bold">
        <div class="flex-1 min-w-0">
          <p class="font-semibold text-sm truncate">

            {{ auth()->user()->getRoleNames()->first() === 'doctor' ? 'Dr. ' : '' }}

            {{ auth()->user()->name }}</p>
          <p class="text-xs text-surface-500 truncate capitalize">{{ auth()->user()->getRoleNames()->first() }}</p>
        </div>
      </div>

      <form action="{{ route('logout') }}" method="POST" class="inline-block text-red-500">
        @csrf
        <button class="submit">
          <iconify-icon icon="material-symbols:logout-rounded" width="20" height="20"></iconify-icon>
        </button>
      </form>
    </div>
  </div>
</aside>
