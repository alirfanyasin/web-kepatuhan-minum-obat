@extends('layouts.app')
@section('content')
  <x-breadcrumb title="To-Do List Management" sub-title="Kelola tugas dan jadwal pasien" />

  <div class="grid grid-cols-1">
    <div>

      <section class="p-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 mb-2">
        <form action="" class="flex items-center gap-3">
          <input type="text" name="search" id="search" placeholder="Cari pasien..."
            class="w-full p-3 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white" />
          <select name="filter" id="filter"
            class="w-full p-3 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white">
            <option value="">Filter</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </form>
      </section>

      <section
        class="p-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 space-y-3">
        <x-patient-card name="Irfan Yasin" age="25" gender="Laki-Laki" initial="IY" idPatient="1002" />
        <x-patient-card name="Irfan Yasin" age="25" gender="Laki-Laki" initial="IY" idPatient="1003" />
        <x-patient-card name="Irfan Yasin" age="25" gender="Laki-Laki" initial="IY" idPatient="1004" />
        <x-patient-card name="Irfan Yasin" age="25" gender="Laki-Laki" initial="IY" idPatient="1005" />
        <x-patient-card name="Irfan Yasin" age="25" gender="Laki-Laki" initial="IY" idPatient="1006" />

      </section>
    </div>





  </div>
@endsection
