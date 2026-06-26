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
                <h2 class="text-2xl md:text-3xl font-bold text-[#192229]">Certifications & Compliance</h2>
                
                <div class="text-[14.5px] text-gray-600 space-y-5 leading-relaxed text-justify">
                    <p>
                        KAP Herlina Astrid (KAP HAR) is fully certified and compliant with all relevant professional standards and regulatory requirements in Indonesia. Our certifications include:
</p>
<ul class="list-disc list-inside space-y-1 text-gray-600">
   
 <li class="text-md font-semibold text-[#192229]">Licensed Public Accounting Firm</li>
 <p>
Registered with the Ministry of Finance of the Republic of Indonesia, holding License No. 229/KM.1/2024.
</p>

<li class="text-md font-semibold text-[#192229]">Member of Indonesian Institute of Certified Public Accountants (IAPI)</li>
<p >
Commitment to uphold professional ethics and continuous development through membership in the national accounting body.
</p>
<li class="text-md font-semibold text-[#192229]">
Certified Public Accountants (CPA) Licenses</li>
<p>
All partners and key professionals hold CPA licenses issued by the Indonesian Institute of Accountants (IAI), ensuring adherence to the highest professional standards.
</p>
<li class="text-md font-semibold text-[#192229]">
Compliance with Standards of Professional Public Accountants (SPAP)
</li>
<p>
We strictly follow the SPAP guidelines in our audit and assurance services to guarantee quality and reliability.
</p>
<li class="text-md font-semibold text-[#192229]">
Adherence to International Financial Reporting Standards (IFRS) and Indonesian Financial Accounting Standards (PSAK)
</li>
<p>
Ensuring our financial reporting services meet both local and global accounting standards.
</p>
<li class="text-md font-semibold text-[#192229]">
Ongoing Professional Development
</li>
<p>
Our team actively participates in training and development programs to stay updated with the latest industry practices, regulations, and technologies.
</p>
</ul>
                   </p> 
                </div>
            </div>

            <div class="relative group">
                <div class="bg-white rounded-xl shadow-2xl border border-gray-100 overflow-hidden transform group-hover:scale-[1.02] transition-transform duration-500">
                    <div class="bg-[#721c1c] px-5 py-3 flex justify-between items-center">
                        <span class="text-white font-bold text-xs uppercase tracking-wider">Our Business Identification Number(NIB)</span>
                        <div class="flex gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                        </div>
                    </div>
                    <div class="p-1">
                        <img src="asset_img/certification.jpg" 
                             alt="Portfolio IFRS 17 Client List" 
                             class="w-full h-auto object-cover rounded-b-lg">
                    </div>
                </div>

                <div class="absolute -z-10 -bottom-6 -right-6 w-32 h-32 bg-gray-100 rounded-full blur-2xl"></div>
            </div>

        </div>

        <div class="mt-20 border-t border-gray-100 pt-10">
            <div class="flex justify-center">
                <a href="{{ route('web.about') }}" class="group flex items-center gap-3 border border-gray-300 px-10 py-3 rounded-md text-[#192229] font-medium text-sm hover:bg-gray-50 hover:border-[#721c1c] transition-all shadow-sm">
                   About Us
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</main>
</div>