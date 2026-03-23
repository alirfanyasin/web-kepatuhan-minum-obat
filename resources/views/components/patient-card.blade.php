 <a href="{{ url('/app/todolist/irfanyasin') }}"
   class="p-2 rounded-xl bg-surface-100 dark:bg-surface-800 flex items-center justify-between hover:bg-surface-200 dark:hover:bg-surface-700 transition-colors">
   <div class="flex items-center gap-3 justify-start">
     <div
       class="w-14 h-14 text-xl text-white font-semibold rounded-full flex justify-center items-center bg-gradient-to-br from-medical-400 to-medical-600">
       {{ $initial }}</div>
     <div>
       <h4 class="font-semibold text-lg">{{ $name }}</h4>
       <p class="font-normal text-sm">{{ $age }} Th, {{ $gender }} - ID#{{ $idPatient }}</p>
     </div>
   </div>
   <div class="flex gap-2 items-center">
     <iconify-icon icon="solar:user-linear" width="24" height="24"></iconify-icon>
     <div>
       <small class="font-semibold block">Dr. John Doe</small>
       <small>Nakes</small>
     </div>
   </div>
   <div>
     <small>Progress 70%</small>
     <div class="w-24 h-2 bg-surface-300 dark:bg-surface-600 rounded-full overflow-hidden">
       <div class="h-full bg-medical-500 rounded-full" style="width: 70%"></div>
     </div>
   </div>
   <div href="#" class="flex items-center justify-center pr-4 text-surface-500">
     <iconify-icon icon="weui:arrow-outlined" width="12" height="24"></iconify-icon>
   </div>
 </a>
