<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use App\Models\NewsAndCareer;
use Illuminate\Support\Str;

new #[Layout('layouts::frontend')] class extends Component
{
    #[Computed]
    public function news()
    {
        return NewsAndCareer::query()
            ->where('status', 'published')
            ->latest('tanggal_publish')
            ->get();
    }
};
?>

<div>
    <main class="bg-white min-h-screen font-sans antialiased">

        <section class="bg-gray-50 py-16 border-b border-gray-100">
            <div class="max-w-[1240px] mx-auto px-6 text-center space-y-3">
                <h1 class="text-3xl md:text-4xl font-bold text-[#192229] tracking-tight">
                    News & Careers
                </h1>
                <p class="text-sm font-medium text-[#721c1c] uppercase tracking-[0.2em]">
                    KAP Herlina Astrid
                </p>
                <div class="w-12 h-[3px] bg-[#721c1c] mx-auto mt-4"></div>
            </div>
        </section>

        <section class="max-w-[1240px] mx-auto px-6 py-16">
            <div class="space-y-2 mb-10 text-left">
                <h2 class="text-2xl font-bold text-[#192229]">Latest News & Insights</h2>
                <div class="w-10 h-0.5 bg-[#721c1c]"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse ($this->news as $item)
                    <article
                        wire:key="news-{{ $item->id }}"
                        class="bg-white rounded overflow-hidden border border-gray-200/60 shadow-sm flex flex-col group"
                    >
                        <div class="aspect-video w-full bg-gray-100 overflow-hidden relative">
                            @if ($item->image)
                                <img
                                    src="{{ asset('storage/' . $item->image) }}"
                                    alt="{{ $item->title }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                >
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-100 text-gray-400 text-xs">
                                    No Image
                                </div>
                            @endif
                        </div>

                        <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                            <div class="space-y-2">
                                <span class="text-[11px] font-semibold text-[#721c1c] uppercase tracking-wider block">
                                    {{ \Carbon\Carbon::parse($item->tanggal_publish)->format('F d, Y') }}
                                </span>

                                <h3 class="font-bold text-base text-[#192229] leading-snug group-hover:text-[#721c1c] transition-colors line-clamp-2">
                                    {{ $item->title }}
                                </h3>

                                <p class="text-xs text-gray-500 leading-relaxed line-clamp-3">
                                    {{ Str::limit(strip_tags($item->berita), 160) }}
                                </p>
                            </div>

                            <a
                                 href="{{ route('web.newsCareerDetail', $item->slug) }}"
                                class="inline-flex items-center text-[12px] font-medium text-[#192229] hover:text-[#721c1c] transition-colors pt-2 group/btn"
                            >
                                Read Full Article
                                <svg class="w-3.5 h-3.5 ml-1 transform group-hover/btn:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-1 md:col-span-2 lg:col-span-3">
                        <div class="border border-gray-200 bg-gray-50 rounded-lg p-8 text-center">
                            <p class="text-sm text-gray-500">
                                Belum ada berita yang dipublikasikan.
                            </p>
                        </div>
                    </div>
                @endforelse

            </div>
        </section>

        <div class="max-w-[1240px] mx-auto px-6">
            <div class="border-t border-gray-100"></div>
        </div>

        <section class="max-w-[1240px] mx-auto px-6 py-16 md:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-7 space-y-5 text-left">
                    <div class="space-y-1">
                        <span class="text-xs font-semibold uppercase text-[#721c1c] tracking-wider block">
                            Grow With Us
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-[#192229]">
                            Build Your Career Path
                        </h2>
                        <div class="w-10 h-0.5 bg-[#721c1c] mt-2"></div>
                    </div>

                    <div class="text-[14.5px] text-gray-600 space-y-4 leading-relaxed text-justify pt-2">
                        <p>
                            At KAP Herlina Astrid, we believe that our people are our greatest asset. We provide a dynamic, inclusive, and collaborative working environment that fosters professional growth, structural expertise, and leadership skills.
                        </p>
                        <p>
                            Whether you are an experienced professional seeking new challenges or a fresh graduate eager to embark on a fulfilling accounting and auditing career, we invite you to explore the opportunities within our firm.
                        </p>
                    </div>

                    <div class="bg-gray-50 border border-gray-100 p-4 rounded-md text-sm text-gray-700 flex flex-col sm:flex-row sm:items-center justify-between gap-4 mt-6">
                        <div>
                            <p class="font-semibold text-[#192229]">
                                Interested in joining our team?
                            </p>
                            <p class="text-xs text-gray-500">
                                Send your latest CV and portfolio to our recruitment division.
                            </p>
                        </div>

                        <a
                            href="mailto:career@herlinaastrid.com"
                            class="inline-block text-[12px] font-semibold text-white bg-[#721c1c] hover:bg-[#5f1717] px-5 py-2.5 rounded transition-colors text-center shadow-sm whitespace-nowrap"
                        >
                            Apply via Email
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 w-full">
                    <div class="bg-white p-2 rounded-lg border border-gray-200/70 shadow-md transform rotate-1 hover:rotate-0 transition-transform duration-300">
                        <img
                            src="path-to-your-images/office-team.jpg"
                            alt="KAP Herlina Astrid Team"
                            class="w-full h-auto rounded object-cover aspect-[4/3]"
                        >
                    </div>
                </div>

            </div>
        </section>

    </main>
</div>