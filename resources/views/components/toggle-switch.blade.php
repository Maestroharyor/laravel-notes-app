 <label for="AcceptConditions"
     class="relative inline-block h-8 w-14 cursor-pointer rounded-full bg-gray-300 transition [-webkit-tap-highlight-color:_transparent] has-[:checked]:bg-yellow-600">
     <input type="checkbox" id="AcceptConditions" x-model="darkMode"
         class="peer sr-only [&:checked_+_span_svg[data-checked-icon]]:block [&:checked_+_span_svg[data-unchecked-icon]]:hidden" />

     <span
         class="absolute inset-y-0 z-10 inline-flex items-center justify-center m-1 text-gray-400 transition-all bg-white rounded-full start-0 size-6 peer-checked:start-6 peer-checked:text-yellow-600">

         <svg data-unchecked-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="size-4">
             <path stroke-linecap="round" stroke-linejoin="round"
                 d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
         </svg>

         <svg data-checked-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="hidden size-4">
             <path stroke-linecap="round" stroke-linejoin="round"
                 d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
         </svg>

     </span>
 </label>
