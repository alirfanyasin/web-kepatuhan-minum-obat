<div class="mb-6 animate-slide-up">
  <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
    <div>
      <h1 class="font-display text-2xl lg:text-3xl font-bold tracking-tight">{{ $title }}</h1>
      <p class="font-medium text-medical-600 dark:text-medical-400">{{ $subTitle }}</p>
    </div>

    {{ $slot }}
  </div>
</div>
