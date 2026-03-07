<!DOCTYPE html>
<html lang="id" class="light">

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
    }

    .dark {
      --bg: #0f172a;
      --fg: #f1f5f9;
      --muted: #94a3b8;
      --card: #1e293b;
      --border: #334155;
      --accent: #2dd4bf;
      --accent-light: #5eead4;
    }

    body {
      background: var(--bg);
      color: var(--fg);
      font-family: 'Inter', sans-serif;
    }

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

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes scaleIn {
      from {
        opacity: 0;
        transform: scale(0.95);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes checkmark {
      0% {
        stroke-dashoffset: 100;
      }

      100% {
        stroke-dashoffset: 0;
      }
    }

    .animate-slide-up {
      animation: slideUp 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
      opacity: 0;
    }

    .animate-fade-in {
      animation: fadeIn 0.3s ease-out forwards;
    }

    .animate-scale-in {
      animation: scaleIn 0.3s ease-out forwards;
    }

    .delay-1 {
      animation-delay: 0.05s;
    }

    .delay-2 {
      animation-delay: 0.1s;
    }

    .delay-3 {
      animation-delay: 0.15s;
    }

    .delay-4 {
      animation-delay: 0.2s;
    }

    .delay-5 {
      animation-delay: 0.25s;
    }

    @media (prefers-reduced-motion: reduce) {

      .animate-slide-up,
      .animate-fade-in,
      .animate-scale-in {
        animation: none;
        opacity: 1;
        transform: none;
      }
    }

    .checkbox-custom:checked+label .checkbox-icon {
      animation: checkmark 0.3s ease-out forwards;
    }

    .progress-ring {
      transform: rotate(-90deg);
    }

    .view-transition {
      transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .view-hidden {
      opacity: 0;
      pointer-events: none;
      position: absolute;
      transform: translateY(10px);
    }

    .card-hover {
      transition: all 0.3s ease;
    }

    .card-hover:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 40px -12px rgba(13, 148, 136, 0.15);
    }

    .focus-ring:focus-visible {
      outline: 2px solid var(--accent);
      outline-offset: 2px;
    }

    .medical-pattern {
      background-image:
        radial-gradient(circle at 20% 20%, rgba(13, 148, 136, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(16, 185, 129, 0.03) 0%, transparent 50%);
    }

    .nakes-pattern {
      background-image:
        radial-gradient(circle at 30% 30%, rgba(99, 102, 241, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 70% 70%, rgba(13, 148, 136, 0.05) 0%, transparent 50%);
    }
  </style>
</head>

<body class="min-h-screen medical-pattern">
  <main>
    @yield('content')
  </main>



  <script>
    // Initialize theme
    function initTheme() {
      const html = document.documentElement;
      const savedTheme = localStorage.getItem('medicare-theme');
      const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

      if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
        html.classList.add('dark');
      } else {
        html.classList.remove('dark');
      }
    }

    // Initialize
    initTheme();
  </script>

</body>

</html>
