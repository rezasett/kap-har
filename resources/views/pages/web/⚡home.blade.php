<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::frontend')] class extends Component
{
   
};
?>

<div>
<main class="bg-gray-50 min-h-screen font-sans antialiased">
{{-- slide --}}
   <section class="relative h-[480px] md:h-[560px] bg-[#192229] overflow-hidden" 
         x-data="{ 
            activeSlide: 1, 
            slidesCount: 3,
            autoPlay() {
                setInterval(() => {
                    this.activeSlide = this.activeSlide === this.slidesCount ? 1 : this.activeSlide + 1;
                }, 5000); // Ganti slide otomatis setiap 5 detik
            }
         }" 
         x-init="autoPlay()">

    <div x-show="activeSlide === 1" 
         x-transition:enter="transition ease-out duration-1000"
         x-transition:enter-start="opacity-0 scale-105"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-500"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="absolute inset-0 bg-cover bg-center flex items-center justify-center text-center px-4"
         style="background-image: linear-gradient(rgba(25, 34, 41, 0.45), rgba(25, 34, 41, 0.45)), url('{{ asset('asset_img/slide-1.jpg') }}');">
        
        <div class="space-y-3">
            <h1 class="text-white font-bold text-4xl md:text-5xl tracking-widest">H A R</h1>
            <p class="text-white text-xs md:text-sm tracking-[0.25em] font-medium uppercase opacity-90">
                Certified Public Accounting Firm
            </p>
        </div>
    </div>

    <div x-show="activeSlide === 2" 
         x-transition:enter="transition ease-out duration-1000"
         x-transition:enter-start="opacity-0 scale-105"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-500"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="absolute inset-0 bg-cover bg-center flex items-center justify-center text-center px-4"
         style="background-image: linear-gradient(rgba(25, 34, 41, 0.5), rgba(25, 34, 41, 0.5)), url('{{ asset('asset_img/slide-2.jpg') }}');" x-cloak>
        
        <div class="space-y-3">
            <h1 class="text-white font-bold text-4xl md:text-5xl tracking-widest">INTEGRITY</h1>
            <p class="text-white text-xs md:text-sm tracking-[0.25em] font-medium uppercase opacity-90">
                Professional Audit & Assurance Services
            </p>
        </div>
    </div>

    <div x-show="activeSlide === 3" 
         x-transition:enter="transition ease-out duration-1000"
         x-transition:enter-start="opacity-0 scale-105"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-500"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="absolute inset-0 bg-cover bg-center flex items-center justify-center text-center px-4"
         style="background-image: linear-gradient(rgba(25, 34, 41, 0.5), rgba(25, 34, 41, 0.5)), url('{{ asset('asset_img/slide-3.jpg') }}');" x-cloak>
        
        <div class="space-y-3">
            <h1 class="text-white font-bold text-4xl md:text-5xl tracking-widest">GROWTH</h1>
            <p class="text-white text-xs md:text-sm tracking-[0.25em] font-medium uppercase opacity-90">
                Your Trusted Business Advisory Partner
            </p>
        </div>
    </div>

    <div class="absolute bottom-24 left-0 right-0 z-20 flex justify-center gap-2">
        <button @click="activeSlide = 1" 
                :class="activeSlide === 1 ? 'bg-[#721c1c] scale-110' : 'bg-white/50 hover:bg-white'"
                class="w-2.5 h-2.5 rounded-full transition-all duration-300" aria-label="Slide 1"></button>
        <button @click="activeSlide = 2" 
                :class="activeSlide === 2 ? 'bg-[#721c1c] scale-110' : 'bg-white/50 hover:bg-white'"
                class="w-2.5 h-2.5 rounded-full transition-all duration-300" aria-label="Slide 2"></button>
        <button @click="activeSlide = 3" 
                :class="activeSlide === 3 ? 'bg-[#721c1c] scale-110' : 'bg-white/50 hover:bg-white'"
                class="w-2.5 h-2.5 rounded-full transition-all duration-300" aria-label="Slide 3"></button>
    </div>

</section>

    <section class="max-w-[1240px] mx-auto px-6 -mt-16 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-white rounded border border-gray-100 shadow-lg p-6 text-center flex flex-col justify-between items-center min-h-[260px] hover:translate-y-[-4px] transition-transform duration-300">
                <div class="space-y-4">
                    <div class="text-[#721c1c] flex justify-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <h3 class="text-[#192229] font-bold text-base leading-snug">Audit & Assurance</h3>
                    <p class="text-gray-500 text-xs italic leading-relaxed">We are ready to provide the services of audit & assurance</p>
                </div>
                <a href="#" class="mt-4 inline-block text-[11px] text-[#192229] border border-gray-300 px-4 py-1.5 rounded hover:bg-gray-50 transition-colors">Read More</a>
            </div>

            <div class="bg-white rounded border border-gray-100 shadow-lg p-6 text-center flex flex-col justify-between items-center min-h-[260px] hover:translate-y-[-4px] transition-transform duration-300">
                <div class="space-y-4">
                    <div class="text-[#721c1c] flex justify-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 12l3-3 3 3 4-4M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-[#192229] font-bold text-base leading-snug">Consulting & Business Services</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">We offer expertise service to client that will be done by our professional specialist</p>
                </div>
                <a href="#" class="mt-4 inline-block text-[11px] text-[#192229] border border-gray-300 px-4 py-1.5 rounded hover:bg-gray-50 transition-colors">Read More</a>
            </div>

            <div class="bg-white rounded border border-gray-100 shadow-lg p-6 text-center flex flex-col justify-between items-center min-h-[260px] hover:translate-y-[-4px] transition-transform duration-300">
                <div class="space-y-4">
                    <div class="text-[#721c1c] flex justify-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-[#192229] font-bold text-base leading-snug">Corporate Finance Services</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">Our team has the necessary skills and experience across a broad range of sectors to provide objective and independent advice</p>
                </div>
                <a href="#" class="mt-4 inline-block text-[11px] text-[#192229] border border-gray-300 px-4 py-1.5 rounded hover:bg-gray-50 transition-colors">Read More</a>
            </div>

            <div class="bg-white rounded border border-gray-100 shadow-lg p-6 text-center flex flex-col justify-between items-center min-h-[260px] hover:translate-y-[-4px] transition-transform duration-300">
                <div class="space-y-4">
                    <div class="text-[#721c1c] flex justify-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-[#192229] font-bold text-base leading-snug">Tax & Accounting Services</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">Our team will ready to discuss their taxation and accountancy to solve clients problems</p>
                </div>
                <a href="#" class="mt-4 inline-block text-[11px] text-[#192229] border border-gray-300 px-4 py-1.5 rounded hover:bg-gray-50 transition-colors">Read More</a>
            </div>

        </div>

        <div class="text-center mt-8">
            <a href="{{ route('web.ourService') }}" class="inline-block text-[12px] font-medium text-[#192229] border border-gray-300 px-5 py-2 rounded bg-white hover:bg-gray-50 transition-colors shadow-sm">Read More</a>
        </div>
    </section>

    <section class="max-w-[1240px] mx-auto px-6 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="space-y-5 text-left">
                <div class="space-y-1">
                    <span class="text-xs font-semibold uppercase text-[#721c1c] tracking-wider block">Welcome to</span>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#192229]">KAP Herlina Astrid</h2>
                    <div class="w-12 h-[3px] bg-[#721c1c] mt-2"></div>
                </div>
                <div class="text-sm text-gray-600 space-y-4 leading-relaxed pt-2">
                    <p>Herlina Astrid Public Accounting Firm is an independent and professional accounting firm. We are committed to delivering responsive and high-quality solutions to our clients.</p>
                    <p>Our team experience is providing services and personalized attention to meet the unique needs of each client.</p>
                </div>
                <div class="pt-2">
                    <a href="#" class="inline-block text-[12px] font-medium text-[#192229] border border-gray-300 px-5 py-2 rounded bg-white hover:bg-gray-50 transition-colors shadow-sm">Read More</a>
                </div>
            </div>

            <div class="w-full">
                <img src={{ asset('asset_img/har-office.jpg') }} alt="KAP Herlina Astrid Office" class="w-full h-auto rounded-lg shadow-md object-cover">
            </div>

        </div>
    </section>

    <section class="bg-gray-100/60 border-t border-b border-gray-200/50 py-20">
        <div class="max-w-[1240px] mx-auto px-6">
            
            <div class="text-center space-y-2 mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-[#192229]">Industry Sectors</h2>
                <div class="w-12 h-[3px] bg-[#721c1c] mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <div class="bg-white rounded border border-gray-100 shadow-sm p-6 text-center space-y-3 flex flex-col justify-start items-center">
                    <div class="text-[#721c1c]"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div>
                    <h4 class="font-bold text-sm text-[#192229]">Banking & Financial Services</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">KAP Herlina Astrid supports banking institutions and financial service providers through financial audits, compliance with OJK and other regulations.</p>
                </div>

                <div class="bg-white rounded border border-gray-100 shadow-sm p-6 text-center space-y-3 flex flex-col justify-start items-center">
                    <div class="text-[#721c1c]"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                    <h4 class="font-bold text-sm text-[#192229]">Insurance & Reinsurance</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">We assist insurance and reinsurance companies with financial audits, evaluation of claim reserve adequacy, and compliance with regulators.</p>
                </div>

                <div class="bg-white rounded border border-gray-100 shadow-sm p-6 text-center space-y-3 flex flex-col justify-start items-center">
                    <div class="text-[#721c1c]"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg></div>
                    <h4 class="font-bold text-sm text-[#192229]">Government & Public Sector</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">For government bodies and public institutions, we provide audit services, budget reviews, and program effectiveness evaluations.</p>
                </div>

                <div class="bg-white rounded border border-gray-100 shadow-sm p-6 text-center space-y-3 flex flex-col justify-start items-center">
                    <div class="text-[#721c1c]"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg></div>
                    <h4 class="font-bold text-sm text-[#192229]">NGOs, Foundations & Cooperatives</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">KAP Herlina Astrid supports non-profit foundations, and cooperatives through financial audits, verification of grant fund usage, and the preparation of financial reports.</p>
                </div>

                <div class="bg-white rounded border border-gray-100 shadow-sm p-6 text-center space-y-3 flex flex-col justify-start items-center">
                    <div class="text-[#721c1c]"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 12l3-3 3 3 4-4M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div>
                    <h4 class="font-bold text-sm text-[#192229]">Publicly Listed Companies</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">We deliver independent audits, annual financial statement reviews, and support with procedures for public listed companies. Our role is to help clients maintain compliance.</p>
                </div>

                <div class="bg-white rounded border border-gray-100 shadow-sm p-6 text-center space-y-3 flex flex-col justify-start items-center">
                    <div class="text-[#721c1c]"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div>
                    <h4 class="font-bold text-sm text-[#192229]">Manufacturing & Industrial Sector</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">We serve manufacturing companies through inventory audits, cost analysis, production analysis, and the implementation of internal control systems.</p>
                </div>

            </div>

            <div class="text-center mt-10">
                <a href="{{ route('web.industrySector') }}" class="inline-block text-[12px] font-medium text-[#192229] border border-gray-300 px-5 py-2 rounded bg-white hover:bg-gray-50 transition-colors shadow-sm">Read More</a>
            </div>
        </div>
    </section>

</main>
</div>