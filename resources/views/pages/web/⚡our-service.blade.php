<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::frontend')] class extends Component
{
    //
};
?>

<div>
    <main class="bg-white font-sans antialiased" x-data="{ activeTab: 'audit' }">

    <section class="bg-gray-50 py-16 border-b border-gray-100">
        <div class="max-w-[1240px] mx-auto px-6 text-center space-y-3">
            <h1 class="text-3xl md:text-4xl font-bold text-[#192229] tracking-tight">Our Services</h1>
            <p class="text-sm font-medium text-[#721c1c] uppercase tracking-[0.2em]">KAP Herlina Astrid</p>
            <div class="w-12 h-[3px] bg-[#721c1c] mx-auto mt-4"></div>
        </div>
    </section>

    <section class="max-w-[1240px] mx-auto px-6 py-16 md:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <div class="lg:col-span-4 bg-gray-50 p-4 rounded border border-gray-100 space-y-2 sticky top-24">
                
                <button @click="activeTab = 'audit'"
                        :class="activeTab === 'audit' ? 'bg-[#721c1c] text-white font-semibold' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200/60'"
                        class="w-full text-left px-5 py-3.5 rounded text-sm tracking-wide transition-all duration-200 shadow-sm flex justify-between items-center group">
                    <span>Audit & Assurance Services</span>
                    <svg :class="activeTab === 'audit' ? 'text-white' : 'text-gray-400 group-hover:text-gray-600'" class="w-4 h-4 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <button @click="activeTab = 'consulting'"
                        :class="activeTab === 'consulting' ? 'bg-[#721c1c] text-white font-semibold' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200/60'"
                        class="w-full text-left px-5 py-3.5 rounded text-sm tracking-wide transition-all duration-200 shadow-sm flex justify-between items-center group">
                    <span>Consulting & Business Services</span>
                    <svg :class="activeTab === 'consulting' ? 'text-white' : 'text-gray-400 group-hover:text-gray-600'" class="w-4 h-4 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <button @click="activeTab = 'finance'"
                        :class="activeTab === 'finance' ? 'bg-[#721c1c] text-white font-semibold' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200/60'"
                        class="w-full text-left px-5 py-3.5 rounded text-sm tracking-wide transition-all duration-200 shadow-sm flex justify-between items-center group">
                    <span>Corporate Finance Services</span>
                    <svg :class="activeTab === 'finance' ? 'text-white' : 'text-gray-400 group-hover:text-gray-600'" class="w-4 h-4 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <button @click="activeTab = 'tax'"
                        :class="activeTab === 'tax' ? 'bg-[#721c1c] text-white font-semibold' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200/60'"
                        class="w-full text-left px-5 py-3.5 rounded text-sm tracking-wide transition-all duration-200 shadow-sm flex justify-between items-center group">
                    <span>Tax & Accounting Services</span>
                    <svg :class="activeTab === 'tax' ? 'text-white' : 'text-gray-400 group-hover:text-gray-600'" class="w-4 h-4 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

            </div>

            <div class="lg:col-span-8 bg-white lg:pl-4">
                
                <div x-show="activeTab === 'audit'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" class="space-y-6">
                    <h2 class="text-2xl font-bold text-[#192229]">Audit & Assurance Services</h2>
                    <div class="w-10 h-0.5 bg-[#721c1c]"></div>
                    <div class="text-[14.5px] text-gray-600 space-y-4 leading-relaxed text-justify">
                        <p>We are ready to provide independent and objective audit & assurance services to assess your financial health and regulatory compliance.</p>
                        <p>Our core solutions include:</p>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600">
                            <li>General Financial Statement Audits</li>
                            <li>Special Purpose Audits & Reviews</li>
                            <li>Agreed-Upon Procedures (AUP)</li>
                            <li>Internal Control Assessment & Framework Implementation</li>
                        </ul>
                    </div>
                </div>

                <div x-show="activeTab === 'consulting'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" class="space-y-6" x-cloak>
                    <h2 class="text-2xl font-bold text-[#192229]">Consulting & Business Services</h2>
                    <div class="w-10 h-0.5 bg-[#721c1c]"></div>
                    <div class="text-[14.5px] text-gray-600 space-y-4 leading-relaxed text-justify">
                        <p>We offer expertise service to clients that will be done by our professional specialists to accelerate operational efficiency and strategic business goals.</p>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600">
                            <li>Standard Operating Procedure (SOP) Development</li>
                            <li>Risk Management Advisory</li>
                            <li>Business Process Re-engineering</li>
                            <li>Corporate Governance Advisory</li>
                        </ul>
                    </div>
                </div>

                <div x-show="activeTab === 'finance'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" class="space-y-6" x-cloak>
                    <h2 class="text-2xl font-bold text-[#192229]">Corporate Finance Services</h2>
                    <div class="w-10 h-0.5 bg-[#721c1c]"></div>
                    <div class="text-[14.5px] text-gray-600 space-y-4 leading-relaxed text-justify">
                        <p>Our team has the necessary skills and experience across a broad range of sectors to provide objective and independent financial advice.</p>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600">
                            <li>Financial Due Diligence</li>
                            <li>Business Valuation & Modeling</li>
                            <li>Mergers & Acquisitions Advisory</li>
                            <li>Capital Restructuring Assistance</li>
                        </ul>
                    </div>
                </div>

                <div x-show="activeTab === 'tax'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" class="space-y-6" x-cloak>
                    <h2 class="text-2xl font-bold text-[#192229]">Tax & Accounting Services</h2>
                    <div class="w-10 h-0.5 bg-[#721c1c]"></div>
                    <div class="text-[14.5px] text-gray-600 space-y-4 leading-relaxed text-justify">
                        <p>Our team is always ready to discuss taxation and accountancy matters to solve complex financial administration and regulatory compliance issues.</p>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600">
                            <li>Corporate & Personal Tax Compliance</li>
                            <li>Tax Audit Support & Dispute Resolution Assistance</li>
                            <li>Monthly & Annual Tax Reporting (SPT)</li>
                            <li>Outsourced Bookkeeping & Financial Reporting Services</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
</div>