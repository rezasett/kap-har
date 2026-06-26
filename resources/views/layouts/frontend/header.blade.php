<header
    x-data="{ mobileMenuOpen: false, firmDropdownOpen: false }"
    class="sticky top-0 z-50 w-full border-b border-gray-200 bg-white backdrop-blur shadow-lg "
>
    <div class="mx-auto flex h-20 max-w-6xl items-center justify-between p-4 bg-white">

        {{-- Logo --}}
        <a href="{{ route('web.home') }}" class="flex items-center">
            <img
                src="{{ asset('asset_img/logo-har.svg') }}"
                alt="KAP Herlina Astrid"
                class="h-14 w-auto object-contain"
            >
        </a>

        {{-- Desktop Menu --}}
        <nav class="hidden items-center gap-2 lg:flex">

            <a href="{{ route('web.home') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition
               {{ request()->is('/') ? 'bg-[#931913] text-red-100' : 'text-slate-800 hover:bg-red-600 hover:text-red-100' }}">
                Home
            </a>

            {{-- Our Firm Dropdown --}}
            <div
                class="relative"
                @mouseenter="firmDropdownOpen = true"
                @mouseleave="firmDropdownOpen = false"
            >
                <button
                    type="button"
                    @click="firmDropdownOpen = !firmDropdownOpen"
                    class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium transition
                    {{ request()->is('about', 'overview-legality', 'vision-mission', 'certification') ? 'bg-[#931913] text-red-100' : 'text-slate-800 hover:bg-red-600 hover:text-red-100' }}"
                >
                    <span>Our Firm</span>

                    <svg class="h-2 w-2 transition" :class="{ 'rotate-180': firmDropdownOpen }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div
                    x-cloak
                    x-show="firmDropdownOpen"
                    x-transition.origin.top
                    class="absolute left-0 mt-2 w-56 rounded-lg border border-gray-200 bg-white py-2 shadow-lg"
                >
                    <a href="{{ route('web.about') }}"
                       class="block px-4 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                        About Us
                    </a>

                    <a href="{{ route('web.overviewLegality') }}"
                       class="block px-4 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                        Overview & Legality
                    </a>

                    <a href="{{ route('web.visionMission') }}"
                       class="block px-4 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                        Vision & Mission
                    </a>

                    <a href="{{ route('web.certification') }}"
                       class="block px-4 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                        Certification
                    </a>
                </div>
            </div>

            <a href="{{ route('web.ourPartner') }}"
              class="rounded-md px-3 py-2 text-sm font-medium transition
               {{ request()->is('our-partner') ? 'bg-[#931913] text-red-100' : 'text-slate-800 hover:bg-red-600 hover:text-red-100' }}">
                Our Partner
            </a>

            <a href="{{ route('web.ourService') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition
               {{ request()->is('our-service') ? 'bg-[#931913] text-red-100' : 'text-slate-800 hover:bg-red-600 hover:text-red-100' }}">
                Our Service
            </a>

            <a href="{{ route('web.industrySector') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition
               {{ request()->is('industry-sector') ? 'bg-[#931913] text-red-100' : 'text-slate-800 hover:bg-red-600 hover:text-red-100' }}">
                Industry Sectors
            </a>

            <a href="{{ route('web.newsCareers') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition
               {{ request()->is('news-careers') ? 'bg-[#931913] text-red-100' : 'text-slate-800 hover:bg-red-600 hover:text-red-100' }}">
                News & Careers
            </a>

            <a href="{{ route('web.contact') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition
               {{ request()->is('contact') ? 'bg-[#931913] text-red-100' : 'text-slate-800 hover:bg-red-600 hover:text-red-100' }}">
                Contact
            </a>

            <a href="{{ route('dashboard') }}"
               class="ml-2 rounded-md px-4 py-2 text-sm font-semibold transition
               {{ request()->is('dashboard') ? 'bg-[#931913] text-red-100' : 'text-slate-800 hover:bg-[#931913] hover:text-red-100' }}">
                Login
            </a>
        </nav>

        {{-- Mobile Button --}}
        <button
            type="button"
            class="inline-flex items-center justify-center rounded-md p-2 text-slate-800 hover:bg-red-600 hover:text-red-100 lg:hidden"
            @click="mobileMenuOpen = !mobileMenuOpen"
        >
            <span class="sr-only">Open menu</span>

            <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <svg x-cloak x-show="mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div
        x-cloak
        x-show="mobileMenuOpen"
        x-transition
        class="border-t border-gray-200 bg-white lg:hidden"
    >
        <div class="space-y-1 px-4 py-4">

            <a href="{{ route('web.home') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium
               {{ request()->is('/') ? 'bg-[#931913] text-red-100' : 'text-slate-800 hover:bg-red-600 hover:text-red-100' }}">
                Home
            </a>

            <div x-data="{ open: false }">
                <button
                    type="button"
                    @click="open = !open"
                    class="flex w-full items-center justify-between rounded-md px-3 py-2 text-sm font-medium text-slate-800 hover:bg-red-600 hover:text-red-100"
                >
                    <span>Our Firm</span>
                    <svg class="h-2 w-2 transition" :class="{ 'rotate-180': open }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-cloak x-show="open" x-transition class="mt-1 space-y-1 pl-4">
                    <a href="{{ route('web.about') }}" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                        About Us
                    </a>

                    <a href="{{ route('web.overviewLegality') }}" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                        Overview & Legality
                    </a>

                    <a href="{{ route('web.visionMission') }}" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                        Vision & Mission
                    </a>

                    <a href="{{ route('web.certification') }}" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                        Certification
                    </a>
                </div>
            </div>

            <a href="{{ route('web.ourPartner') }}" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                Our Partner
            </a>

            <a href="{{ route('web.ourService') }}" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                Our Service
            </a>

            <a href="{{ route('web.industrySector') }}" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                Industry Sectors
            </a>

            <a href="{{ route('web.newsCareers') }}" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                News & Careers
            </a>

            <a href="{{ route('web.contact') }}" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                Contact
            </a>

            <a href="{{ route('dashboard') }}" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-red-600 hover:text-red-100">
                Login
            </a>
        </div>
    </div>
</header>