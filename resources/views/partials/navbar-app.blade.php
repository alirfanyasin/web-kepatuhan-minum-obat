<header
  class="sticky top-0 z-30 h-16 bg-white/80 dark:bg-surface-900/80 backdrop-blur-xl border-b border-surface-200 dark:border-surface-800">
  <div class="h-full px-4 lg:px-6 flex items-center justify-between">
    <!-- Left -->
    <div class="flex items-center gap-3">
      <button onclick="toggleSidebar()"
        class="lg:hidden p-2 rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 focus-ring" aria-label="Open menu">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Right -->
    <div class="flex items-center gap-1 sm:gap-2">
      <!-- Theme Toggle -->
      <button onclick="toggleTheme()"
        class="p-2 rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring"
        aria-label="Toggle theme">
        <svg class="w-5 h-5 hidden dark:block text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        <svg class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
      </button>

      <!-- Date Display -->
      <div class="hidden md:flex items-center gap-2 ml-2 pl-3 border-l border-surface-200 dark:border-surface-700">
        <svg class="w-4 h-4 text-medical-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span class="text-sm font-medium" id="currentDate"></span>
      </div>
    </div>
  </div>
</header>
