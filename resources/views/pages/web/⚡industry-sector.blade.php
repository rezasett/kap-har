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
            <h1 class="text-3xl md:text-4xl font-bold text-[#192229] tracking-tight">Industry Sectors</h1>
            <p class="text-sm font-medium text-[#721c1c] uppercase tracking-[0.2em]">KAP Herlina Astrid</p>
            <div class="w-12 h-[3px] bg-[#721c1c] mx-auto mt-4"></div>
        </div>
    </section>

    <section class="max-w-[1240px] mx-auto px-6 py-16 md:py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
            
            <div class="flex items-start gap-5 pb-6 border-b border-gray-100">
                <div class="text-[#721c1c] shrink-0 pt-1">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-[16px] text-[#192229] tracking-tight">Banking & Financial Services</h3>
                    <p class="text-sm text-gray-500 leading-relaxed text-justify">
                        KAP Herlina Astrid supports banking institutions and financial service providers through financial audits, compliance with Bank Indonesia (BI), OJK standards, and other specialized regulations.
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-5 pb-6 border-b border-gray-100">
                <div class="text-[#721c1c] shrink-0 pt-1">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-[16px] text-[#192229] tracking-tight">Insurance & Reinsurance</h3>
                    <p class="text-sm text-gray-500 leading-relaxed text-justify">
                        We assist insurance and reinsurance companies with specialized financial audits, evaluation of claim reserve adequacy, and ongoing structural compliance with regional regulators.
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-5 pb-6 border-b border-gray-100">
                <div class="text-[#721c1c] shrink-0 pt-1">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-[16px] text-[#192229] tracking-tight">Government & Public Sector</h3>
                    <p class="text-sm text-gray-500 leading-relaxed text-justify">
                        For government bodies, regional agencies, and public sector institutions, we deliver detailed public account audits, state/regional budget performance reviews, and strict compliance evaluations.
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-5 pb-6 border-b border-gray-100">
                <div class="text-[#721c1c] shrink-0 pt-1">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-[16px] text-[#192229] tracking-tight">NGOs, Foundations & Cooperatives</h3>
                    <p class="text-sm text-gray-500 leading-relaxed text-justify">
                        KAP Herlina Astrid supports non-profit structures, donor-funded foundations, and local cooperatives through dedicated grant audits, specific fund usage verification, and preparation of transparent reports.
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-5 pb-6 border-b border-gray-100 md:border-none">
                <div class="text-[#721c1c] shrink-0 pt-1">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 12l3-3 3 3 4-4M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-[16px] text-[#192229] tracking-tight">Publicly Listed Companies</h3>
                    <p class="text-sm text-gray-500 leading-relaxed text-justify">
                        We deliver independent audits, annual financial statement reviews, and support with compliance procedures for public listed companies to maintain alignment with stock exchange parameters.
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-5 pb-6 border-b border-gray-100 md:border-none">
                <div class="text-[#721c1c] shrink-0 pt-1">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-[16px] text-[#192229] tracking-tight">Manufacturing & Industrial Sector</h3>
                    <p class="text-sm text-gray-500 leading-relaxed text-justify">
                        We serve manufacturing companies through inventory audits, product cost analysis, and the framework implementation of internal cost management control systems.
                    </p>
                </div>
            </div>

        </div>
    </section>

</main>
</div>