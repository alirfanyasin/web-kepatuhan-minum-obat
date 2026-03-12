@extends('layouts.app')


@section('content')
  <!-- Container -->
  <div class="max-w-2xl mx-auto">

    <!-- Header -->
    <header class="mb-8 animate-slide-up">
      <div class="flex items-center justify-between mb-6">
        <div>
          <p class="text-sm text-surface-500 dark:text-surface-400 mb-1">Selamat Pagi,</p>
          <h1 class="font-display text-2xl md:text-3xl font-bold">Ahmad Syafii</h1>
        </div>
      </div>

      <!-- Progress Card -->
      <div
        class="bg-gradient-to-br from-medical-500 to-medical-700 rounded-3xl p-6 text-white shadow-xl shadow-medical-500/20">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-medical-100 text-sm font-medium mb-1">Progress Hari Ini</p>
            <h2 class="text-3xl font-display font-bold mb-2" id="progressText">3 dari 6</h2>
            {{-- <p class="text-medical-100 text-sm">tugas telah diselesaikan</p> --}}
          </div>
          <div class="relative">
            <svg class="progress-ring w-20 h-20" viewBox="0 0 36 36">
              <circle cx="18" cy="18" r="15.9155" fill="none" stroke="rgba(255,255,255,0.2)"
                stroke-width="3" />
              <circle id="progressCircle" class="progress-ring-circle" cx="18" cy="18" r="15.9155"
                fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-dasharray="50, 100" />
            </svg>
            <span class="absolute inset-0 flex items-center justify-center text-lg font-bold"
              id="progressPercent">50%</span>
          </div>
        </div>
      </div>
    </header>

    <!-- Filter Tabs -->
    <div class="flex gap-2 mb-6 overflow-x-auto pb-2 animate-slide-up" style="animation-delay: 0.1s">
      <button onclick="filterTasks('all')"
        class="filter-btn active px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-medical-500 text-white">
        Semua
      </button>
      <button onclick="filterTasks('medicine')"
        class="filter-btn px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-white dark:bg-surface-800 text-surface-600 dark:text-surface-300 border border-surface-200 dark:border-surface-700 hover:border-medical-500">
        Obat
      </button>
      <button onclick="filterTasks('activity')"
        class="filter-btn px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-white dark:bg-surface-800 text-surface-600 dark:text-surface-300 border border-surface-200 dark:border-surface-700 hover:border-medical-500">
        Aktivitas
      </button>
      <button onclick="filterTasks('lifestyle')"
        class="filter-btn px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-white dark:bg-surface-800 text-surface-600 dark:text-surface-300 border border-surface-200 dark:border-surface-700 hover:border-medical-500">
        Gaya Hidup
      </button>
      <button onclick="filterTasks('checkup')"
        class="filter-btn px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-white dark:bg-surface-800 text-surface-600 dark:text-surface-300 border border-surface-200 dark:border-surface-700 hover:border-medical-500">
        Pemeriksaan
      </button>
    </div>

    <!-- Task List -->
    <div class="space-y-3" id="taskList">
      <!-- Tasks will be rendered here -->
    </div>

    <!-- Motivational Footer -->
    <div class="mt-8 text-center animate-slide-up" style="animation-delay: 0.4s">
      <p class="text-sm text-surface-500 dark:text-surface-400">
        Tetap semangat! Pemulihan dimulai dari langkah kecil.
      </p>
    </div>
  </div>

  <script>
    // Data Tugas
    const tasks = [{
        id: 1,
        title: 'Minum Amlodipine 5mg',
        desc: '1 tablet setelah sarapan',
        time: '07:00',
        category: 'medicine',
        completed: true,
        doctor: 'Dr. Rahayu'
      },
      {
        id: 2,
        title: 'Jalan Kaki Pagi',
        desc: '30 menit di sekitar rumah',
        time: '06:30',
        category: 'activity',
        completed: true,
        doctor: 'Dr. Rahayu'
      },
      {
        id: 3,
        title: 'Kurangi Konsumsi Garam',
        desc: 'Maksimal 1 sendok teh per hari',
        time: 'Seharian',
        category: 'lifestyle',
        completed: true,
        doctor: 'Dr. Rahayu'
      },
      {
        id: 4,
        title: 'Cek Tekanan Darah',
        desc: 'Gunakan alat di rumah, catat hasilnya',
        time: '09:00',
        category: 'checkup',
        completed: false,
        doctor: 'Dr. Rahayu'
      },
      {
        id: 5,
        title: 'Minum Vitamin B Complex',
        desc: '1 tablet setelah makan siang',
        time: '12:00',
        category: 'medicine',
        completed: false,
        doctor: 'Dr. Rahayu'
      },
      {
        id: 6,
        title: 'Meditasi Malam',
        desc: '15 menit sebelum tidur untuk relaksasi',
        time: '21:00',
        category: 'lifestyle',
        completed: false,
        doctor: 'Dr. Rahayu'
      }
    ];

    // Kategori Styles & Icons
    const categoryConfig = {
      medicine: {
        label: 'Obat',
        color: 'text-green-500',
        bg: 'bg-green-500/10',
        border: 'border-green-500/20',
        icon: `<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                </svg>`
      },
      activity: {
        label: 'Aktivitas',
        color: 'text-blue-500',
        bg: 'bg-blue-500/10',
        border: 'border-blue-500/20',
        icon: `<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>`
      },
      lifestyle: {
        label: 'Gaya Hidup',
        color: 'text-amber-500',
        bg: 'bg-amber-500/10',
        border: 'border-amber-500/20',
        icon: `<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>`
      },
      checkup: {
        label: 'Pemeriksaan',
        color: 'text-purple-500',
        bg: 'bg-purple-500/10',
        border: 'border-purple-500/20',
        icon: `<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                </svg>`
      }
    };

    // Render Tasks
    function renderTasks(filter = 'all') {
      const container = document.getElementById('taskList');
      const filteredTasks = filter === 'all' ? tasks : tasks.filter(t => t.category === filter);

      container.innerHTML = filteredTasks.map((task, index) => {
        const config = categoryConfig[task.category];
        return `
                    <div class="task-item task-card bg-white dark:bg-surface-900 rounded-2xl p-4 border border-surface-200 dark:border-surface-800 shadow-sm ${task.completed ? 'opacity-70' : ''}" data-id="${task.id}">
                        <div class="flex items-start gap-4">
                            <!-- Checkbox -->
                            <button onclick="toggleTask(${task.id})" class="flex-shrink-0 mt-0.5 focus-ring rounded-lg">
                                <div class="checkbox-custom w-7 h-7 rounded-lg border-2 ${task.completed ? 'bg-medical-500 border-medical-500' : 'border-surface-300 dark:border-surface-600 hover:border-medical-500'} flex items-center justify-center transition-all">
                                    ${task.completed ? `
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                                </svg>
                                            ` : ''}
                                </div>
                            </button>
                            
                            <!-- Content -->
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1">
                                    <h3 class="font-semibold text-base task-text ${task.completed ? 'completed text-surface-400 line-through' : ''}">${task.title}</h3>
                                </div>
                                <p class="text-sm text-surface-500 dark:text-surface-400 mb-3">${task.desc}</p>
                                
                                <div class="flex flex-wrap items-center gap-3 text-xs">
                                    <!-- Time -->
                                    <div class="flex items-center gap-1.5 text-surface-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span>${task.time}</span>
                                    </div>
                                    
                                    <!-- Doctor -->
                                    <div class="flex items-center gap-1.5 text-surface-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                        <span>${task.doctor}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Category Badge -->
                            <div class="flex-shrink-0 flex flex-col items-end gap-2">
                                <div class="p-2 rounded-xl ${config.bg}">
                                    ${config.icon}
                                </div>
                                <span class="text-xs font-medium ${config.color} ${config.bg} px-2 py-0.5 rounded-full">${config.label}</span>
                            </div>
                        </div>
                    </div>
                `;
      }).join('');
    }

    // Toggle Task Completion
    function toggleTask(id) {
      const task = tasks.find(t => t.id === id);
      if (task) {
        task.completed = !task.completed;
        renderTasks(currentFilter);
        updateProgress();
      }
    }

    // Update Progress
    function updateProgress() {
      const completed = tasks.filter(t => t.completed).length;
      const total = tasks.length;
      const percent = Math.round((completed / total) * 100);

      document.getElementById('progressText').textContent = `${completed} dari ${total}`;
      document.getElementById('progressPercent').textContent = `${percent}%`;

      // Update circle
      const circle = document.getElementById('progressCircle');
      const circumference = 2 * Math.PI * 15.9155;
      const offset = circumference - (percent / 100) * circumference;
      circle.style.strokeDasharray = `${circumference}`;
      circle.style.strokeDashoffset = offset;
    }

    // Filter Tasks
    let currentFilter = 'all';

    function filterTasks(filter) {
      currentFilter = filter;

      // Update active button
      document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('bg-medical-500', 'text-white');
        btn.classList.add('bg-white', 'dark:bg-surface-800', 'text-surface-600', 'dark:text-surface-300', 'border',
          'border-surface-200', 'dark:border-surface-700');
      });

      event.target.classList.remove('bg-white', 'dark:bg-surface-800', 'text-surface-600', 'dark:text-surface-300',
        'border', 'border-surface-200', 'dark:border-surface-700');
      event.target.classList.add('bg-medical-500', 'text-white');

      renderTasks(filter);
    }

    renderTasks();
    updateProgress();
  </script>
@endsection
