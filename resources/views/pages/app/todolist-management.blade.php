@extends('layouts.app')
@section('content')
  <x-breadcrumb title="To-Do List Pasien" sub-title="Kelola tugas dan jadwal pasien" />

  <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
    <div>

      {{-- <section
        class="p-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 mb-2 animate-slide-up">

        <div class="flex gap-2 items-center">

          <button onclick="openTab('tambah', this)"
            class="tab-btn hover:text-white border border-surface-300 dark:border-surface-700 p-3 w-full rounded-lg hover:bg-gradient-to-br hover:from-medical-400 hover:to-medical-600 bg-gradient-to-br from-medical-400 to-medical-600 text-white">
            Tambah
          </button>

          <button onclick="openTab('history', this)"
            class="tab-btn hover:text-white border border-surface-300 dark:border-surface-700 p-3 w-full rounded-lg hover:bg-gradient-to-br hover:from-medical-400 hover:to-medical-600">
            History
          </button>

          <button onclick="openTab('target', this)"
            class="tab-btn hover:text-white border border-surface-300 dark:border-surface-700 p-3 w-full rounded-lg hover:bg-gradient-to-br hover:from-medical-400 hover:to-medical-600">
            Target
          </button>

        </div>

      </section> --}}




      {{-- Tambah --}}
      <section id="tambah" class="tab-content animate-slide-up">

        <div
          class="p-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 space-y-3">
          <form action="{{ route('todolist-management.store', $data->id) }}" class="space-y-4" method="POST">
            @csrf
            <input type="text" name="name" id="name" required
              class="w-full p-4 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
              placeholder="Nama Tugas" autofocus>

            <textarea name="description" id="description" cols="30" rows="5"
              class="w-full p-4 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
              placeholder="Deskripsi Tugas"></textarea>

            <select name="todolist_category_id" id="category" required
              class="w-full  p-4 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white">
              <option value="">Pilih Jenis Tugas</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>

            <div>
              <small class="text-surface-300">Dilakukan pada jam</small>
              <input type="time" name="time" id="time" required
                class="w-full p-4 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
                placeholder="Waktu Tugas">
            </div>

            <div>
              <small class="text-surface-300">Dilakukan berapa hari? (optional)</small>
              <input type="number" name="day" id="day"
                class="w-full p-4 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
                placeholder="Contoh: 7">
            </div>

            {{-- <input type="number" name="frequency" id="frequency"
              class="w-full p-4 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
              placeholder="Sehari berapa kali?">

            <input type="number" name="duration" id="duration"
              class="w-full p-4 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
              placeholder="Berapa jam sekali?">


            <input type="number" name="duration" id="duration"
              class="w-full p-4 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
              placeholder="Selama berapa hari?">

            <div>
              <small class="text-surface-300">Dimulai pada tanggal</small>
              <input type="date" name="start" id="start"
                class="w-full p-4 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
                placeholder="Dimulai pada tanggal">
            </div> --}}

            <div class="flex justify-end">
              <button type="submit"
                class="bg-medical-500 text-white px-5 py-2 inline-block rounded-lg font-medium hover:bg-medical-600 transition-colors">
                Tambah Tugas
              </button>
            </div>
          </form>
        </div>

      </section>


      @include('partials.todolist-category')

    </div>



    @include('partials.todolist-preview')

  </div>
@endsection
