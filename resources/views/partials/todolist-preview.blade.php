@php
  $todayPercent = $todayTotal ? round(($todayDone / $todayTotal) * 100) : 0;
  $targetPercent = $targetTotal ? round(($targetDone / $targetTotal) * 100) : 0;
@endphp

<section class="">
  <!-- Header -->
  <header class="mb-8 animate-slide-up">
    <div class="flex items-center justify-between mb-6">
      <div>
        <p class="text-sm text-medical-600 dark:text-medical-400 mb-1">Selamat Pagi,</p>
        <h1 class="font-display text-2xl md:text-3xl font-bold">{{ $data->user->name }}</h1>
      </div>
    </div>

    <!-- Progress Card -->
    <div
      class="bg-gradient-to-br from-medical-500 to-medical-700 rounded-3xl p-6 text-white shadow-xl shadow-medical-500/20">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-medical-100 text-sm font-medium mb-1">Progress Hari Ini</p>
          <h2 class="text-3xl font-display font-bold mb-2" id="todayCountText">{{ $todayDone }} dari
            {{ $todayTotal }}</h2>
          <p class="text-medical-100 text-sm">tugas telah diselesaikan</p>
          <p class="text-medical-100 text-sm" id="targetCountText">Target {{ $targetDone }} dari {{ $targetTotal }}
          </p>
        </div>
        <div class="flex items-center gap-2">
          <!-- Ring Harian -->
          <div class="relative">
            <div class="relative">
              <svg class="progress-ring w-20 h-20" viewBox="0 0 36 36">
                <circle cx="18" cy="18" r="15.9155" fill="none" stroke="rgba(255,255,255,0.2)"
                  stroke-width="3" />
                <circle id="todayRingCircle" class="progress-ring-circle" cx="18" cy="18" r="15.9155"
                  fill="none" stroke="white" stroke-width="3" stroke-linecap="round"
                  stroke-dasharray="{{ $todayPercent }}, 100" />
              </svg>
              <span class="absolute inset-0 flex items-center justify-center text-lg font-bold" id="todayPercentText">
                {{ $todayPercent }}%
              </span>
            </div>
            <small class="text-center block">Harian</small>
          </div>
          <!-- Ring Target -->
          <div class="relative">
            <div class="relative">
              <svg class="progress-ring w-20 h-20" viewBox="0 0 36 36">
                <circle cx="18" cy="18" r="15.9155" fill="none" stroke="rgba(255,255,255,0.2)"
                  stroke-width="3" />
                <circle id="targetRingCircle" class="progress-ring-circle" cx="18" cy="18" r="15.9155"
                  fill="none" stroke="white" stroke-width="3" stroke-linecap="round"
                  stroke-dasharray="{{ $targetPercent }}, 100" />
              </svg>
              <span class="absolute inset-0 flex items-center justify-center text-lg font-bold" id="targetPercentText">
                {{ $targetPercent }}%
              </span>
            </div>
            <small class="text-center block">Target</small>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Filter Tabs -->
  <div class="flex gap-2 mb-6 overflow-x-auto pb-2 animate-slide-up" style="animation-delay: 0.1s">
    <button onclick="filterTasks('all')"
      class="filter-btn active px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-medical-500 text-white border border-surface-200 dark:border-surface-700 hover:border-medical-500">
      Semua
    </button>
    @foreach ($categories as $category)
      <button onclick="filterTasks('{{ $category->name }}')"
        class="filter-btn px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-surface-100 dark:bg-surface-800 text-surface-600 dark:text-surface-300 border border-surface-200 dark:border-surface-700 hover:border-medical-500">
        {{ $category->name }}
      </button>
    @endforeach
    @hasrole('doctor')
      <button onclick="filterTasks('target')"
        class="filter-btn px-4 py-2 rounded-xl text-sm font-medium whitespace-nowrap transition-all bg-surface-100 dark:bg-surface-800 text-surface-600 dark:text-surface-300 border border-surface-200 dark:border-surface-700 hover:border-medical-500">
        Target
      </button>
    @endhasrole
  </div>

  <!-- Task List -->
  <div class="space-y-3 max-h-screen overflow-y-auto" id="taskList">

    {{-- Today's tasks --}}
    @foreach ($todolists as $todo)
      @php
        $colors = [
            ['text-green-600', 'bg-green-100'],
            ['text-blue-600', 'bg-blue-100'],
            ['text-purple-600', 'bg-purple-100'],
            ['text-pink-600', 'bg-pink-100'],
            ['text-yellow-600', 'bg-yellow-100'],
            ['text-red-600', 'bg-red-100'],
            ['text-indigo-600', 'bg-indigo-100'],
        ];
        $index = $todo->todolist_category_id % count($colors);
      @endphp

      <div
        class="task-item task-card bg-white dark:bg-surface-900 rounded-2xl p-4 border border-surface-200 dark:border-surface-800 shadow-sm"
        data-id="{{ $todo->id }}" data-type="today" data-category="{{ $todo->todolistCategory->name }}"
        data-date="{{ $todo->created_at->toDateString() }}">

        <div class="flex items-start gap-4">

          <!-- Checkbox -->
          <button onclick="toggleTask({{ $todo->id }})" class="flex-shrink-0 mt-0.5 rounded-lg">
            <div
              class="checkbox-custom w-7 h-7 rounded-lg border-2 border-surface-300 flex items-center justify-center {{ $todo->status === 'done' ? 'bg-medical-500 border-medical-500' : '' }}">
              <svg class="w-4 h-4 text-white {{ $todo->status === 'done' ? '' : 'hidden' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
              </svg>
            </div>
          </button>

          <!-- Content -->
          <div class="flex-1 min-w-0">
            <div class="flex items-center gap-2 mb-1">
              <h3
                class="font-semibold text-base task-text {{ $todo->status === 'done' ? 'line-through text-red-500' : '' }}">
                {{ $todo->name }}</h3>
            </div>
            <p class="text-sm text-surface-500 mb-3">{{ $todo->description }}</p>
            <div class="flex flex-wrap items-center gap-3 text-xs">
              <div class="flex items-center gap-1.5 text-surface-500">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ $todo->time }}</span>
              </div>
              <div class="flex items-center gap-1.5 text-surface-500">
                <iconify-icon icon="uiw:date" width="12" height="12"></iconify-icon>
                <span>{{ $todo->created_at->translatedFormat('d F Y') }}</span>
              </div>
            </div>
          </div>

          <!-- Category Badge -->
          <div class="flex-shrink-0 flex flex-col items-end gap-2">
            <span
              class="text-xs font-medium {{ $colors[$index][0] }} {{ $colors[$index][1] }} px-2 py-0.5 rounded-full">
              {{ $todo->todolistCategory->name }}
            </span>
          </div>

        </div>
      </div>
    @endforeach

    {{-- Target tasks (all todos, hidden by default, shown when filter = 'target') --}}
    @foreach ($targetTodos as $todo)
      @php
        $colors = [
            ['text-green-600', 'bg-green-100'],
            ['text-blue-600', 'bg-blue-100'],
            ['text-purple-600', 'bg-purple-100'],
            ['text-pink-600', 'bg-pink-100'],
            ['text-yellow-600', 'bg-yellow-100'],
            ['text-red-600', 'bg-red-100'],
            ['text-indigo-600', 'bg-indigo-100'],
        ];
        $index = $todo->todolist_category_id % count($colors);
      @endphp

      <div
        class="task-item task-card bg-white dark:bg-surface-900 rounded-2xl p-4 border border-surface-200 dark:border-surface-800 shadow-sm"
        data-id="{{ $todo->id }}" data-type="target" data-category="{{ $todo->todolistCategory->name }}"
        data-date="{{ $todo->created_at->toDateString() }}" style="display: none;">

        <div class="flex items-start gap-4">

          <!-- Checkbox + Delete -->
          <div class="flex flex-col items-center gap-2">
            <button onclick="toggleTask({{ $todo->id }})" class="flex-shrink-0 mt-0.5 rounded-lg">
              <div
                class="checkbox-custom w-7 h-7 rounded-lg border-2 border-surface-300 flex items-center justify-center {{ $todo->status === 'done' ? 'bg-medical-500 border-medical-500' : '' }}">
                <svg class="w-4 h-4 text-white {{ $todo->status === 'done' ? '' : 'hidden' }}" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
              </div>
            </button>

            {{-- Delete button --}}
            <button onclick="deleteTask({{ $todo->id }})"
              class="text-red-400 hover:text-red-600 transition-colors">
              <iconify-icon icon="tabler:trash" width="20" height="20"></iconify-icon>
            </button>
          </div>

          <!-- Content -->
          <div class="flex-1 min-w-0">
            <div class="flex items-center gap-2 mb-1">
              <h3
                class="font-semibold text-base task-text {{ $todo->status === 'done' ? 'line-through text-red-500' : '' }}">
                {{ $todo->name }}
              </h3>
            </div>
            <p class="text-sm text-surface-500 mb-3">{{ $todo->description }}</p>
            <div class="flex flex-wrap items-center gap-3 text-xs">
              <div class="flex items-center gap-1.5 text-surface-500">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ $todo->time }}</span>
              </div>
              <div class="flex items-center gap-1.5 text-surface-500">
                <iconify-icon icon="uiw:date" width="12" height="12"></iconify-icon>
                <span>{{ $todo->created_at->translatedFormat('d F Y') }}</span>
              </div>
            </div>
          </div>

          <!-- Category Badge -->
          <div class="flex-shrink-0 flex flex-col items-end justify-between gap-2">
            <span
              class="text-xs font-medium {{ $colors[$index][0] }} {{ $colors[$index][1] }} px-2 py-0.5 rounded-full">
              {{ $todo->todolistCategory->name }}
            </span>
          </div>

        </div>
      </div>
    @endforeach



  </div>
</section>

@push('js')
  <script>
    // State progress — diambil dari nilai PHP saat render
    let todayDone = {{ $todayDone }};
    let todayTotal = {{ $todayTotal }};
    let targetDone = {{ $targetDone }};
    let targetTotal = {{ $targetTotal }};

    function updateProgressUI() {
      const todayPct = todayTotal ? Math.round((todayDone / todayTotal) * 100) : 0;
      const targetPct = targetTotal ? Math.round((targetDone / targetTotal) * 100) : 0;

      // Teks counter
      document.getElementById('todayCountText').textContent = `${todayDone} dari ${todayTotal}`;
      document.getElementById('targetCountText').textContent = `Target ${targetDone} dari ${targetTotal}`;

      // Persentase label
      document.getElementById('todayPercentText').textContent = `${todayPct}%`;
      document.getElementById('targetPercentText').textContent = `${targetPct}%`;

      // SVG ring dasharray
      document.getElementById('todayRingCircle').setAttribute('stroke-dasharray', `${todayPct}, 100`);
      document.getElementById('targetRingCircle').setAttribute('stroke-dasharray', `${targetPct}, 100`);
    }

    function toggleTask(id) {
      let url = "{{ route('todo.toggle', ':id') }}";
      url = url.replace(':id', id);

      fetch(url, {
          method: 'POST',
          headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            "Accept": "application/json"
          }
        })
        .then(res => res.json())
        .then(data => {
          // Update semua card dengan data-id yang sama (today + target bisa overlap)
          let affectsToday = false;
          let affectsTarget = false;

          document.querySelectorAll(`[data-id="${id}"]`).forEach(task => {
            const checkbox = task.querySelector('.checkbox-custom');
            const icon = checkbox.querySelector('svg');
            const taskText = task.querySelector('.task-text');

            if (data.status === 'done') {
              checkbox.classList.add('bg-medical-500', 'border-medical-500');
              icon.classList.remove('hidden');
              taskText.classList.add('line-through', 'text-red-500');
            } else {
              checkbox.classList.remove('bg-medical-500', 'border-medical-500');
              icon.classList.add('hidden');
              taskText.classList.remove('line-through', 'text-red-500');
            }

            if (task.dataset.type === 'today') affectsToday = true;
            if (task.dataset.type === 'target') affectsTarget = true;
          });

          // Update counter state
          const delta = data.status === 'done' ? 1 : -1;
          if (affectsToday) todayDone += delta;
          if (affectsTarget) targetDone += delta;

          updateProgressUI();
        });
    }

    function filterTasks(category) {
      const tasks = document.querySelectorAll('.task-item');
      const today = new Date().toISOString().split('T')[0];

      // Update active state pada tombol filter
      document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('bg-medical-500', 'text-white');
        btn.classList.add('bg-surface-100', 'dark:bg-surface-800', 'text-surface-600', 'dark:text-surface-300');
      });
      event.currentTarget.classList.add('bg-medical-500', 'text-white');
      event.currentTarget.classList.remove('bg-surface-100', 'dark:bg-surface-800', 'text-surface-600',
        'dark:text-surface-300');

      tasks.forEach(task => {
        const taskDate = task.dataset.date;
        const taskType = task.dataset.type;
        const taskCategory = task.dataset.category;

        if (category === 'all') {
          // Tampilkan hanya task hari ini (type=today)
          task.style.display = taskType === 'today' ? 'block' : 'none';
          return;
        }

        if (category === 'target') {
          // Tampilkan semua task (type=target), sembunyikan duplikat today
          task.style.display = taskType === 'target' ? 'block' : 'none';
          return;
        }

        // Filter by category — hanya task hari ini
        task.style.display = (taskType === 'today' && taskCategory === category) ? 'block' : 'none';
      });
    }
  </script>

  <script>
    function deleteTask(id) {
      if (!confirm('Yakin ingin menghapus todo ini?')) return;

      let url = "{{ route('todo.destroy', ':id') }}";
      url = url.replace(':id', id);

      fetch(url, {
          method: 'DELETE',
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json',
          }
        })
        .then(res => res.json())
        .then(data => {
          if (!data.success) return;

          // Hapus semua card dengan data-id yang sama (today & target)
          document.querySelectorAll(`[data-id="${id}"]`).forEach(el => el.remove());

          // Update counter state
          if (data.wasDone) {
            targetDone--;
            if (data.isToday) todayDone--;
          }
          if (data.isToday) todayTotal--;
          targetTotal--;

          updateProgressUI();
        });
    }
  </script>
@endpush
