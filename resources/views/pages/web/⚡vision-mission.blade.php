<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::frontend')] class extends Component
{
    //
};
?>

<div>
  <main class="bg-white min-h-screen font-sans antialiased">

    <section class="bg-gray-50 py-16 border-b border-gray-100">
        <div class="max-w-[1240px] mx-auto px-6 text-center space-y-3">
            <h1 class="text-3xl md:text-4xl font-bold text-[#192229] tracking-tight">Our Firm</h1>
            <p class="text-sm font-medium text-[#721c1c] uppercase tracking-[0.2em]">KAP Herlina Astrid</p>
            <div class="w-12 h-[3px] bg-[#721c1c] mx-auto mt-4"></div>
        </div>
    </section>

    <section class="max-w-[1240px] mx-auto px-6 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <div class="space-y-6 bg-gray-100 p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl md:text-3xl font-bold text-[#192229]">Vision </h2>
                
                <div class="text-[14.5px] text-gray-600 space-y-5 leading-relaxed text-justify">
                    <p>
                        Become a public accounting firm with ethics, integrity, professionalism, and competitiveness nationally and globally
                   </p> 
                </div>
            </div>
            <div class="space-y-6 bg-gray-100 p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl md:text-3xl font-bold text-[#192229]">Mission </h2>
                
                <div class="text-[14.5px] text-gray-600 space-y-5 leading-relaxed text-justify">
                    <p>
                        Committed to maintaining ethics, independence, integrity, and professionalism.
Improving competence, professionalism and employee welfare.
Work in accordance with applicable professional standards.
Providing added value to the services and services provided to clients.
Providing the best service while maintaining the integrity and professionalism of the Public Accounting Firm.
                   </p> 
                </div>
            </div>

          

        </div>

        <div class="mt-20 border-t border-gray-100 pt-10">
            <div class="flex justify-center">
                <a href="{{ route('web.certification') }}" class="group flex items-center gap-3 border border-gray-300 px-10 py-3 rounded-md text-[#192229] font-medium text-sm hover:bg-gray-50 hover:border-[#721c1c] transition-all shadow-sm">
                   Certification
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</main>
</div>