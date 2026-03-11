<section class="mt-5">
  <div class="p-5 bg-white dark:bg-surface-900 rounded-2xl border border-surface-200 dark:border-surface-800 space-y-3">
    <form action="{{ route('todolist-category.store') }}" method="POST" class="space-y-4">
      @csrf
      <input type="text" name="name" id="name" required
        class="w-full p-4 rounded-lg border border-surface-300 dark:border-surface-700 focus:outline-none focus:ring-2 focus:ring-medical-400 focus:border-transparent dark:bg-surface-800 dark:text-white"
        placeholder="Nama Kategori">

      <div class="flex justify-end">
        <button type="submit"
          class="bg-medical-500 text-white px-5 py-2 inline-block rounded-lg font-medium hover:bg-medical-600 transition-colors">
          Tambah Kategori
        </button>
      </div>
    </form>

    <div class="flex items-center gap-2 flex-wrap">
      @foreach ($categories as $category)
        <div
          class="px-3 py-2 flex items-center gap-2 bg-surface-100/50 rounded-md border border-surface-300 dark:bg-surface-800 dark:border-surface-600">
          <p> {{ $category->name }}</p>

          <form action="{{ route('todolist-category.destroy', $category->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500">
              <iconify-icon icon="fa7-solid:times" width="14" height="14"></iconify-icon>
            </button>
          </form>
        </div>
      @endforeach
    </div>

  </div>
</section>
