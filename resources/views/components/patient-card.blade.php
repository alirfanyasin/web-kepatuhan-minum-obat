 <a href="#"
   class="p-2 rounded-xl bg-surface-100 dark:bg-surface-800 flex items-center justify-between hover:bg-surface-200 dark:hover:bg-surface-700 transition-colors">
   <div class="flex items-center gap-3 justify-start">
     <div
       class="w-14 h-14 text-xl text-white font-semibold rounded-full flex justify-center items-center bg-gradient-to-br from-medical-400 to-medical-600">
       {{ $initial }}</div>
     <div>
       <h4 class="font-semibold text-lg">{{ $name }}</h4>
       <p class="font-normal text-sm">{{ $age }} Th, {{ $gender }} - {{ $idPatient }}</p>
     </div>
   </div>
   <div href="#" class="flex items-center justify-center pr-4 text-surface-300">
     <iconify-icon icon="weui:arrow-outlined" width="12" height="24"></iconify-icon>
   </div>
 </a>
