@extends('layouts.app')
@section('content')
  <x-breadcrumb title="Medical Checkup" sub-title="History hasil pemeriksaan">

    @if (!$dataUser->hasActiveCheckup())
      <a href="{{ route('medical-checkup.create', ['id' => $dataUser->id]) }}"
        class="w-10 h-10 flex items-center justify-center rounded-lg bg-medical-600 text-white hover:bg-medical-700">
        <iconify-icon icon="tabler:plus" width="24" height="24"></iconify-icon>
      </a>
    @endif
    {{-- <a href="{{ route('medical-checkup.create', ['id' => $dataUser->id]) }}"
      class="w-10 h-10 flex items-center justify-center  rounded-lg bg-medical-600 text-white hover:bg-medical-700">
      <iconify-icon icon="tabler:plus" width="24" height="24"></iconify-icon>
    </a> --}}

  </x-breadcrumb>

  <div class="grid lg:grid-cols-2 grid-cols-1 gap-3">

    @foreach ($dataMedicalCheckup as $data)
      <div
        class="p-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 mb-2 animate-slide-up relative">
        <div class="">
          <h3 class="text-xl font-semibold">{{ $data->user->name ?? 'Name not available' }}</h3>
          <p class="text-surface-400 mb-4">{{ $data->code }}</p>


          <div class="flex items-center justify-between">

            <div class="flex items-center gap-2">
              <a href="{{ route('medical-checkup.edit', ['id' => $data->id]) }}"
                class="w-10 h-10 flex items-center justify-center  rounded-lg dark:bg-surface-700 bg-surface-100">
                <iconify-icon icon="boxicons:edit" width="24" height="24" class="text-surface-500"></iconify-icon>
              </a>

              <form action="{{ route('medical-checkup.destroy', $data->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')"
                  class="w-10 h-10 flex items-center justify-center rounded-lg dark:bg-red-700/30 bg-red-100/60">
                  <iconify-icon icon="bx:trash" width="24" height="24" class="text-red-500"></iconify-icon>
                </button>
              </form>

              <a href="{{ route('todolist-management', ['id' => $data->id]) }}"
                class="w-10 h-10 flex items-center justify-center  rounded-lg dark:bg-medical-700/30 bg-medical-100/60">
                <iconify-icon icon="lucide:list-todo" width="24" height="24"
                  class="text-medical-600"></iconify-icon>
              </a>
            </div>

            <div class="flex items-center gap-2">
              <p class="px-2 py-1 rounded-md bg-surface-100 text-xs dark:bg-surface-800">
                {{ $data->created_at->translatedFormat('d F Y') }}
              </p>
              -
              <p class="px-2 py-1 rounded-md bg-surface-100 text-xs dark:bg-surface-800">
                {{ $data->created_at->translatedFormat('H:i') }}
              </p>
            </div>

            {{-- <div>
              <small>Progress {{ $targetPercent }}%</small>
              <div class="w-24 h-2 bg-surface-300 dark:bg-surface-600 rounded-full overflow-hidden">
                <div class="h-full bg-medical-500 rounded-full" style="width: {{ $targetPercent }}%"></div>
              </div>
            </div> --}}

          </div>

          <div
            class=" px-2 py-1 rounded-l-lg {{ $data->status === 'treatment' ? 'bg-yellow-600' : 'bg-medical-600' }} text-white absolute top-5 right-0">
            <p class="text-sm font-light capitalize">{{ $data->status === 'treatment' ? 'Perawatan' : 'Sembuh' }}</p>
          </div>
        </div>
      </div>
    @endforeach

  </div>
@endsection
