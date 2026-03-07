<!DOCTYPE html>
<html lang="id" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MediCare Pro - Patient Monitoring System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap"
    rel="stylesheet">

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
            }
          },
          animation: {
            'float': 'float 6s ease-in-out infinite',
            'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
          },
          keyframes: {
            float: {
              '0%, 100%': {
                transform: 'translateY(0)'
              },
              '50%': {
                transform: 'translateY(-20px)'
              },
            }
          }
        }
      }
    }
  </script>

  <style>
    :root {
      --bg: #ffffff;
      --fg: #0f172a;
      --muted: #64748b;
      --accent: #0d9488;
      --accent-light: #14b8a6;
    }

    .dark {
      --bg: #0f172a;
      --fg: #f1f5f9;
      --muted: #94a3b8;
      --accent: #2dd4bf;
      --accent-light: #5eead4;
    }

    body {
      background: var(--bg);
      color: var(--fg);
      font-family: 'Inter', sans-serif;
    }

    /* Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background: var(--accent);
      border-radius: 10px;
    }

    /* Animations */
    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(40px);
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
        transform: scale(0.9);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes slideRight {
      from {
        opacity: 0;
        transform: translateX(-40px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes beam {
      0% {
        stroke-dashoffset: 1000;
      }

      100% {
        stroke-dashoffset: 0;
      }
    }

    .animate-on-scroll {
      opacity: 0;
      transform: translateY(40px);
    }

    .animate-on-scroll.visible {
      animation: slideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .delay-100 {
      animation-delay: 0.1s;
    }

    .delay-200 {
      animation-delay: 0.2s;
    }

    .delay-300 {
      animation-delay: 0.3s;
    }

    .delay-400 {
      animation-delay: 0.4s;
    }

    .delay-500 {
      animation-delay: 0.5s;
    }

    @media (prefers-reduced-motion: reduce) {
      .animate-on-scroll {
        animation: none;
        opacity: 1;
        transform: none;
      }
    }

    /* Gradient Mesh Background */
    .hero-gradient {
      background:
        radial-gradient(ellipse 80% 50% at 50% -20%, rgba(13, 148, 136, 0.15), transparent),
        radial-gradient(ellipse 60% 40% at 100% 50%, rgba(45, 212, 191, 0.1), transparent),
        radial-gradient(ellipse 50% 30% at 0% 50%, rgba(20, 184, 166, 0.08), transparent);
    }

    .dark .hero-gradient {
      background:
        radial-gradient(ellipse 80% 50% at 50% -20%, rgba(13, 148, 136, 0.25), transparent),
        radial-gradient(ellipse 60% 40% at 100% 50%, rgba(45, 212, 191, 0.15), transparent),
        radial-gradient(ellipse 50% 30% at 0% 50%, rgba(20, 184, 166, 0.1), transparent);
    }

    /* Glass Effect */
    .glass {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
    }

    .dark .glass {
      background: rgba(15, 23, 42, 0.8);
    }

    /* Card Shine */
    .card-shine {
      position: relative;
      overflow: hidden;
    }

    .card-shine::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
      transition: left 0.5s ease;
    }

    .card-shine:hover::before {
      left: 100%;
    }

    /* Focus states */
    .focus-ring:focus-visible {
      outline: 2px solid var(--accent);
      outline-offset: 2px;
    }

    /* Grid Pattern */
    .grid-pattern {
      background-image:
        linear-gradient(to right, rgba(13, 148, 136, 0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(13, 148, 136, 0.03) 1px, transparent 1px);
      background-size: 60px 60px;
    }

    .dark .grid-pattern {
      background-image:
        linear-gradient(to right, rgba(45, 212, 191, 0.05) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(45, 212, 191, 0.05) 1px, transparent 1px);
    }

    /* Pulse Ring */
    .pulse-ring {
      box-shadow: 0 0 0 0 rgba(13, 148, 136, 0.4);
      animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
    }

    @keyframes pulse-ring {
      0% {
        box-shadow: 0 0 0 0 rgba(13, 148, 136, 0.4);
      }

      70% {
        box-shadow: 0 0 0 15px rgba(13, 148, 136, 0);
      }

      100% {
        box-shadow: 0 0 0 0 rgba(13, 148, 136, 0);
      }
    }
  </style>
</head>

<body class="antialiased">

  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <script>
    // Theme Toggle
    function initTheme() {
      const saved = localStorage.getItem('medicare-theme');
      const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
      if (saved === 'dark' || (!saved && systemDark)) {
        document.documentElement.classList.add('dark');
      }
    }

    function toggleTheme() {
      document.documentElement.classList.toggle('dark');
      localStorage.setItem('medicare-theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
    }

    // Mobile Menu
    function toggleMobileMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('hidden');
    }

    // Scroll Animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
      observer.observe(el);
    });

    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
          // Close mobile menu if open
          document.getElementById('mobileMenu').classList.add('hidden');
        }
      });
    });

    // Navbar scroll effect
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
      const nav = document.querySelector('nav');
      const currentScroll = window.pageYOffset;

      if (currentScroll > 100) {
        nav.classList.add('shadow-lg', 'shadow-surface-900/5');
      } else {
        nav.classList.remove('shadow-lg', 'shadow-surface-900/5');
      }

      lastScroll = currentScroll;
    });

    // ==========================================
    // TESTIMONIAL SLIDER LOGIC
    // ==========================================
    const slider = document.getElementById('testimonialSlider');
    const wrapper = document.getElementById('testimonialWrapper');
    const dotsContainer = document.getElementById('sliderDots');
    const slides = slider.children;
    const totalSlides = slides.length;
    let currentSlide = 0;
    let autoSlideInterval;
    const autoSlideDelay = 3000; // 3 seconds

    function getVisibleSlides() {
      if (window.innerWidth >= 1024) return 3;
      if (window.innerWidth >= 768) return 2;
      return 1;
    }

    function generateDots() {
      dotsContainer.innerHTML = '';
      const visibleSlides = getVisibleSlides();
      // Total dots logic: we can slide until the last visible group starts
      const maxIndex = Math.ceil(totalSlides - visibleSlides);

      for (let i = 0; i <= maxIndex; i++) {
        const dot = document.createElement('button');
        dot.className = 'w-2 h-2 rounded-full bg-surface-300 dark:bg-surface-600 transition-all';
        dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
        if (i === 0) dot.classList.add('bg-medical-500', 'w-4');

        dot.addEventListener('click', () => {
          goToSlide(i);
          resetAutoSlide();
        });

        dotsContainer.appendChild(dot);
      }
    }

    function updateDots() {
      const dots = dotsContainer.children;
      for (let i = 0; i < dots.length; i++) {
        if (i === currentSlide) {
          dots[i].classList.add('bg-medical-500', 'w-4');
          dots[i].classList.remove('bg-surface-300', 'dark:bg-surface-600');
        } else {
          dots[i].classList.remove('bg-medical-500', 'w-4');
          dots[i].classList.add('bg-surface-300', 'dark:bg-surface-600');
        }
      }
    }

    function goToSlide(index) {
      const visibleSlides = getVisibleSlides();
      const maxIndex = totalSlides - visibleSlides;

      // Logic for infinite scroll or stop
      if (index > maxIndex) index = 0;
      if (index < 0) index = maxIndex;

      currentSlide = index;
      const percentage = (100 / visibleSlides) * currentSlide;
      slider.style.transform = `translateX(-${percentage}%)`;
      updateDots();
    }

    function nextSlide() {
      goToSlide(currentSlide + 1);
    }

    function startAutoSlide() {
      stopAutoSlide();
      autoSlideInterval = setInterval(nextSlide, autoSlideDelay);
    }

    function stopAutoSlide() {
      clearInterval(autoSlideInterval);
    }

    function resetAutoSlide() {
      stopAutoSlide();
      startAutoSlide();
    }

    // Pause on hover
    wrapper.addEventListener('mouseenter', stopAutoSlide);
    wrapper.addEventListener('mouseleave', startAutoSlide);

    // Handle Resize
    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        generateDots();
        goToSlide(0); // Reset position to avoid glitches
        resetAutoSlide();
      }, 250);
    });

    // Initialize
    initTheme();
    generateDots();
    startAutoSlide();
  </script>
</body>

</html>
