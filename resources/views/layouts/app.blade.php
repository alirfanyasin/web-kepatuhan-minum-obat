<!DOCTYPE html>
<html lang="id" class="dark">

<head>
  <title>MediCare - Hospital Dashboard</title>
  @include('partials.meta')
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            display: ['Plus Jakarta Sans', 'sans-serif'],
            sans: ['Inter', 'sans-serif'],
          },
          colors: {
            medical: {
              50: '#f0fdfa',
              100: '#ccfbf1',
              200: '#99f6e4',
              300: '#5eead4',
              400: '#2dd4bf',
              500: '#14b8a6',
              600: '#0d9488',
              700: '#0f766e',
              800: '#115e59',
              900: '#134e4a',
            },
            surface: {
              50: '#f8fafc',
              100: '#f1f5f9',
              200: '#e2e8f0',
              300: '#cbd5e1',
              400: '#94a3b8',
              500: '#64748b',
              600: '#475569',
              700: '#334155',
              800: '#1e293b',
              900: '#0f172a',
              950: '#020617',
            }
          }
        }
      }
    }
  </script>

  <style>
    :root {
      --bg: #f8fafc;
      --fg: #0f172a;
      --muted: #64748b;
      --card: #ffffff;
      --border: #e2e8f0;
      --accent: #0d9488;
      --accent-light: #14b8a6;
      --accent-glow: rgba(13, 148, 136, 0.12);
      --danger: #ef4444;
      --warning: #f59e0b;
      --success: #10b981;
    }

    .dark {
      --bg: #0f172a;
      --fg: #f1f5f9;
      --muted: #94a3b8;
      --card: #1e293b;
      --border: #334155;
      --accent: #2dd4bf;
      --accent-light: #5eead4;
      --accent-glow: rgba(45, 212, 191, 0.1);
    }

    body {
      background: var(--bg);
      color: var(--fg);
      font-family: 'Inter', sans-serif;
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }

    ::-webkit-scrollbar-track {
      background: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background: var(--border);
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: var(--muted);
    }

    /* Animations */
    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(24px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes pulse-soft {

      0%,
      100% {
        opacity: 1;
      }

      50% {
        opacity: 0.7;
      }
    }

    @keyframes countUp {
      from {
        opacity: 0;
        transform: scale(0.8);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .animate-slide-up {
      animation: slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
      opacity: 0;
    }

    .animate-pulse-soft {
      animation: pulse-soft 2s ease-in-out infinite;
    }

    .animate-count-up {
      animation: countUp 0.5s ease-out forwards;
    }

    .delay-1 {
      animation-delay: 0.08s;
    }

    .delay-2 {
      animation-delay: 0.16s;
    }

    .delay-3 {
      animation-delay: 0.24s;
    }

    .delay-4 {
      animation-delay: 0.32s;
    }

    .delay-5 {
      animation-delay: 0.4s;
    }

    @media (prefers-reduced-motion: reduce) {

      .animate-slide-up,
      .animate-count-up {
        animation: none;
        opacity: 1;
        transform: none;
      }
    }

    /* Sidebar */
    .sidebar-link {
      position: relative;
      transition: all 0.2s ease;
    }

    .sidebar-link.active::before {
      content: '';
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 3px;
      height: 24px;
      background: var(--accent);
      border-radius: 0 4px 4px 0;
    }

    /* Dropdown */
    .dropdown-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease, opacity 0.3s ease;
      opacity: 0;
    }

    .dropdown-menu.open {
      max-height: 300px;
      opacity: 1;
    }

    /* Card hover */
    .stat-card {
      transition: all 0.3s ease;
    }

    .stat-card:hover {
      transform: translateY(-2px);
    }

    /* Progress ring */
    .progress-ring {
      transform: rotate(-90deg);
    }

    /* Heartbeat line */
    .heartbeat-path {
      stroke-dasharray: 1000;
      stroke-dashoffset: 1000;
      animation: drawLine 2s ease-out forwards;
    }

    @keyframes drawLine {
      to {
        stroke-dashoffset: 0;
      }
    }

    /* Focus states */
    .focus-ring:focus-visible {
      outline: 2px solid var(--accent);
      outline-offset: 2px;
    }

    /* Background pattern */
    .medical-pattern {
      background-image:
        radial-gradient(circle at 25% 25%, var(--accent-glow) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(16, 185, 129, 0.05) 0%, transparent 50%);
    }

    /* Status badge pulse */
    .status-critical::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: inherit;
      background: currentColor;
      opacity: 0.3;
      animation: pulse-soft 1.5s ease-in-out infinite;
    }
  </style>
</head>

<body class="min-h-screen medical-pattern">
  <!-- Mobile Overlay -->
  <div id="sidebarOverlay" class="fixed inset-0 bg-black/60 z-40 hidden lg:hidden backdrop-blur-sm"
    onclick="toggleSidebar()"></div>


  @include('partials.sidebar-app')

  <!-- Main Content -->
  <main class="lg:ml-72 min-h-screen">
    @include('partials.navbar-app')

    <!-- Content -->
    <div class="p-4 lg:p-6">
      @yield('content')
    </div>
  </main>


  <script>
    // Initialize elements
    const html = document.documentElement;
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    let sidebarOpen = false;

    // Set current date
    function setCurrentDate() {
      const dateElement = document.getElementById('currentDate');
      if (dateElement) {
        const options = {
          weekday: 'long',
          year: 'numeric',
          month: 'long',
          day: 'numeric'
        };
        dateElement.textContent = new Date().toLocaleDateString('id-ID', options);
      }
    }

    // Initialize theme
    function initTheme() {
      const savedTheme = localStorage.getItem('medicare-theme');
      const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

      if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
        html.classList.add('dark');
      } else {
        html.classList.remove('dark');
      }
    }

    // Toggle theme
    function toggleTheme() {
      html.classList.toggle('dark');
      const isDark = html.classList.contains('dark');
      localStorage.setItem('medicare-theme', isDark ? 'dark' : 'light');
    }

    // Toggle sidebar
    function toggleSidebar() {
      sidebarOpen = !sidebarOpen;

      if (sidebarOpen) {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
        document.body.style.overflow = '';
      }
    }

    // Toggle dropdown
    function toggleDropdown(button) {
      const dropdown = button.parentElement;
      const menu = dropdown.querySelector('.dropdown-menu');
      const arrow = button.querySelector('svg:last-child');

      menu.classList.toggle('open');
      arrow.style.transform = menu.classList.contains('open') ? 'rotate(180deg)' : 'rotate(0deg)';
    }

    // Handle window resize
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024) {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.add('hidden');
        document.body.style.overflow = '';
        sidebarOpen = false;
      } else if (!sidebarOpen) {
        sidebar.classList.add('-translate-x-full');
      }
    });

    // Keyboard shortcuts
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && sidebarOpen) {
        toggleSidebar();
      }
    });

    // Initialize
    initTheme();
    setCurrentDate();

    // Animate elements on scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.animationPlayState = 'running';
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    document.querySelectorAll('.animate-slide-up').forEach(el => {
      el.style.animationPlayState = 'paused';
      observer.observe(el);
    });
  </script>


</body>

</html>
