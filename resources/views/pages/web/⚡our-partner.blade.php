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
            <h1 class="text-3xl md:text-4xl font-bold text-[#192229] tracking-tight">Our Partner</h1>
            <p class="text-sm font-medium text-[#721c1c] uppercase tracking-[0.2em]">KAP Herlina Astrid</p>
            <div class="w-12 h-[3px] bg-[#721c1c] mx-auto mt-4"></div>
        </div>
    </section>

    <section class="max-w-[1240px] mx-auto px-6 py-16 md:py-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-12">
            
            <div class="space-y-4 group">
                <div class="aspect-[3/4] w-full bg-gray-100 rounded overflow-hidden border border-gray-200/60 shadow-sm relative">
                    <img src="{{ asset('asset_img/astrid.jpg') }}"
                         alt=" Astrid Thaleony Tandio" 
                         class="w-full h-full object-cover object-top filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    <div class="absolute inset-0 bg-[#721c1c]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="space-y-1">
                    <h3 class="font-bold text-xl text-[#192229] tracking-tight leading-snug group-hover:text-[#721c1c] transition-colors">
                        Astrid Thaleony Tandio, SE, Ak, M. Ak, CPA, ASEAN CPA, CA.
                    </h3>
                    <p class="text-xs font-semibold text-[#721c1c] uppercase tracking-wider">
                        Managing Partner
                    </p>
                    <hr>
                    <p class="text-sm text-[#192229] leading-snug text-justify">
                        Born in Jakarta, July 21, 1979. Graduated from Tarumanegara University and Master Program University Indonesia. Certificated CPA, ASEAN CPA and CA.Has Experience more than 23 Years
                    </p>
                </div>
            </div>

            <div class="space-y-4 group">
                <div class="aspect-[3/4] w-full bg-gray-100 rounded overflow-hidden border border-gray-200/60 shadow-sm relative">
                    <img src="{{ asset('asset_img/herlina.jpg') }}"
                         alt="Herlina Widiyanti" 
                         class="w-full h-full object-cover object-top filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    <div class="absolute inset-0 bg-[#721c1c]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="space-y-1">
                    <h3 class="font-bold text-xl text-[#192229] tracking-tight leading-snug group-hover:text-[#721c1c] transition-colors">
                        Herlina Widiyanti, S.E.Ak., CPA., CA.
                    </h3>
                    <p class="text-xs font-semibold text-[#721c1c] uppercase tracking-wider">
                        Partner
                    </p>
                    <hr>
                     <p class="text-sm text-[#192229] leading-snug text-justify">
                        Born in Jakarta, April 17, 1985. Graduated from UIN Syarif Hidayatullah Jakarta.Certificated CPA and CA. Has Experience more than 15 Years
                    </p>
                </div>
            </div>

            <div class="space-y-4 group">
                <div class="aspect-[3/4] w-full bg-gray-100 rounded overflow-hidden border border-gray-200/60 shadow-sm relative">
                    <img src="{{ asset('asset_img/luy.jpg') }}"
                         alt="Yohanes Luy" 
                         class="w-full h-full object-cover object-top filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    <div class="absolute inset-0 bg-[#721c1c]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="space-y-1">
                    <h3 class="font-bold text-xl text-[#192229] tracking-tight leading-snug group-hover:text-[#721c1c] transition-colors">
                        Yohanes Luy, S.Ak., CA, ACPA
                    </h3>
                    <p class="text-xs font-semibold text-[#721c1c] uppercase tracking-wider">
                       Partner
                    </p>
                    <hr>
                     <p class="text-sm text-[#192229] leading-snug text-justify">
                        Born in Jakarta, 24 November 1994. Graduated from Sekolah Tinggi Ilmu Ekonomi Indonesia. Certificated ACPA and CA. Has experience more than 8 years.
                    </p>
                </div>
            </div>

            

        </div>
    </section>

</main>
</div>