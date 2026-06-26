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
            
            <div class="space-y-6">
                <h2 class="text-2xl md:text-3xl font-bold text-[#192229]">About Us</h2>
                
                <div class="text-[14.5px] text-gray-600 space-y-5 leading-relaxed text-justify">
                    <p>
                        Kantor Akuntan Publik Herlina Astrid (KAP HAR) is a registered public accounting firm dedicated to providing our clients with high-quality and responsive services. We offer a comprehensive range of accounting, tax, audit, and consulting services to clients across various industries and business sizes, including both public and private enterprises.
                    </p>
                    <p>
                        Our commitment to quality work has been recognized by both our clients and the accounting profession. We take pride in our skills and experience, enabling us to deliver effective and tailored solutions to meet our clients' needs.
                    </p>
                    <p>
                        Our goal is to help grow our clients' businesses through strategic and proactive thinking. We ensure our advice is clear and easy to understand, supported by one-on-one communication with partners and professionals who are always accessible.
                    </p>
                </div>
            </div>

            <div class="relative group">
                <div class="bg-white rounded-xl shadow-2xl border border-gray-100 overflow-hidden transform group-hover:scale-[1.02] transition-transform duration-500">
                    <div class="bg-[#721c1c] px-5 py-3 flex justify-between items-center">
                        <span class="text-white font-bold text-xs uppercase tracking-wider">Portofolio Klien IFRS 17</span>
                        <div class="flex gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                        </div>
                    </div>
                    <div class="p-1">
                        <img src="{{ asset('asset_img/about1.jpg') }}" 
                             alt="Portfolio IFRS 17 Client List" 
                             class="w-full h-auto object-cover rounded-b-lg">
                    </div>
                </div>

                <div class="absolute -z-10 -bottom-6 -right-6 w-32 h-32 bg-gray-100 rounded-full blur-2xl"></div>
            </div>

        </div>

        <div class="mt-20 border-t border-gray-100 pt-10">
            <div class="flex justify-center">
                <a href="{{ route('web.overviewLegality') }}" class="group flex items-center gap-3 border border-gray-300 px-10 py-3 rounded-md text-[#192229] font-medium text-sm hover:bg-gray-50 hover:border-[#721c1c] transition-all shadow-sm">
                    Overview & Legality
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</main>
</div>