 <!-- Navbar -->
 <nav class="fixed top-0 left-0 right-0 z-50 glass border-b border-surface-200/50 dark:border-surface-700/50">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
     <div class="flex items-center justify-between h-16 lg:h-20">
       <!-- Logo -->
       <a href="#" class="flex items-center gap-3">
         <div
           class="w-10 h-10 rounded-xl bg-gradient-to-br from-medical-500 to-medical-700 flex items-center justify-center shadow-lg shadow-medical-500/20">
           <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
           </svg>
         </div>
         <span class="font-display font-bold text-xl tracking-tight">Medi<span
             class="text-medical-500">Care</span></span>
       </a>

       <!-- Desktop Nav -->
       <div class="hidden lg:flex items-center gap-8">
         <a href="/"
           class="text-sm font-medium text-surface-600 hover:text-medical-600 dark:text-surface-300 dark:hover:text-medical-400 transition-colors">Beranda</a>
         <a href="#features"
           class="text-sm font-medium text-surface-600 hover:text-medical-600 dark:text-surface-300 dark:hover:text-medical-400 transition-colors">Fitur</a>
         <a href="#how-it-works"
           class="text-sm font-medium text-surface-600 hover:text-medical-600 dark:text-surface-300 dark:hover:text-medical-400 transition-colors">Cara
           Kerja</a>
         <a href="#testimonials"
           class="text-sm font-medium text-surface-600 hover:text-medical-600 dark:text-surface-300 dark:hover:text-medical-400 transition-colors">Testimoni</a>
       </div>

       <!-- Right -->
       <div class="flex items-center gap-3">
         <button onclick="toggleTheme()"
           class="p-2 rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring"
           aria-label="Toggle theme">
           <svg class="w-5 h-5 hidden dark:block text-yellow-400" fill="none" stroke="currentColor"
             viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
           </svg>
           <svg class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
           </svg>
         </button>

         {{-- <a href="{{ route('login') }}"
           class="hidden md:inline-flex text-sm font-medium text-surface-600 dark:text-surface-300 hover:text-medical-600 dark:hover:text-medical-400 transition-colors">
           Masuk
         </a> --}}

         <a href="{{ route('login') }}"
           class="hidden md:inline-flex items-center gap-2 px-4 py-2.5 bg-medical-500 hover:bg-medical-600 text-white text-sm font-semibold rounded-xl transition-all shadow-lg shadow-medical-500/25 hover:shadow-xl hover:shadow-medical-500/30 active:scale-[0.98]">
           Masuk
         </a>

         <!-- Mobile Menu Button -->
         <button onclick="toggleMobileMenu()"
           class="md:hidden p-2 rounded-lg hover:bg-surface-100 dark:hover:bg-surface-800 transition-colors focus-ring">
           <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
           </svg>
         </button>
       </div>
     </div>
   </div>

   <!-- Mobile Menu -->
   <div id="mobileMenu"
     class="hidden md:hidden border-t border-surface-200 dark:border-surface-800 bg-white dark:bg-surface-900">
     <div class="px-4 py-4 space-y-2">
       <a href="/"
         class="block px-4 py-2.5 rounded-lg text-sm font-medium text-surface-600 hover:bg-surface-100 dark:text-surface-300 dark:hover:bg-surface-800 transition-colors">Beranda</a>
       <a href="#features"
         class="block px-4 py-2.5 rounded-lg text-sm font-medium text-surface-600 hover:bg-surface-100 dark:text-surface-300 dark:hover:bg-surface-800 transition-colors">Fitur</a>
       <a href="#how-it-works"
         class="block px-4 py-2.5 rounded-lg text-sm font-medium text-surface-600 hover:bg-surface-100 dark:text-surface-300 dark:hover:bg-surface-800 transition-colors">Cara
         Kerja</a>
       <a href="{{ route('login') }}"
         class="block px-4 py-2.5 rounded-lg bg-medical-500 hover:bg-medical-600 text-white text-sm font-semibold text-surface-600 transition-all shadow-lg shadow-medical-500/25 hover:shadow-xl hover:shadow-medical-500/30 active:scale-[0.98]">Masuk</a>
     </div>
   </div>
 </nav>
