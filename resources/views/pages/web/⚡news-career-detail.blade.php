<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use App\Models\NewsAndCareer;

new #[Layout('layouts::frontend')] class extends Component
{
    public NewsAndCareer $article;

    public function mount(string $slug): void
    {
        $this->article = NewsAndCareer::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
    }

    #[Computed]
    public function latestArticles()
    {
        return NewsAndCareer::query()
            ->where('status', 'published')
            ->where('id', '!=', $this->article->id)
            ->latest('tanggal_publish')
            ->limit(3)
            ->get();
    }
};
?>

<div>
    <main class="bg-white min-h-screen font-sans antialiased">

        {{-- Hero Detail --}}
        <section class="bg-gray-50 py-14 md:py-16 border-b border-gray-100">
            <div class="max-w-[980px] mx-auto px-6 text-center space-y-5">

                <a
                    href="{{ route('web.newsCareers') }}"
                    class="inline-flex items-center text-xs font-medium text-gray-500 hover:text-[#721c1c] transition-colors"
                >
                    <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to News
                </a>

                <div class="space-y-3">
                    <span class="inline-flex items-center rounded-full bg-[#721c1c]/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-[#721c1c]">
                        {{ $article->kategori }}
                    </span>

                    <h1 class="text-3xl md:text-5xl font-bold text-[#192229] tracking-tight leading-tight">
                        {{ $article->title }}
                    </h1>

                    <div class="flex flex-wrap items-center justify-center gap-x-4 gap-y-2 text-xs text-gray-500">
                        <span>
                            {{ \Carbon\Carbon::parse($article->tanggal_publish)->format('F d, Y') }}
                        </span>

                        <span class="hidden sm:inline-block w-1 h-1 rounded-full bg-gray-300"></span>

                        <span>
                            By {{ $article->author }}
                        </span>
                    </div>
                </div>

                <div class="w-12 h-[3px] bg-[#721c1c] mx-auto"></div>
            </div>
        </section>

        {{-- Main Article --}}
        <section class="max-w-[1240px] mx-auto px-6 py-12 md:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">

                {{-- Article Content --}}
                <article class="lg:col-span-8">

                    {{-- Featured Image --}}
                    <div class="w-full rounded-lg overflow-hidden border border-gray-200/70 bg-gray-100 shadow-sm mb-8">
                        @if ($article->image)
                            <img
                                src="{{ asset('storage/' . $article->image) }}"
                                alt="{{ $article->title }}"
                                class="w-full h-auto object-cover aspect-[16/9]"
                            >
                        @else
                            <div class="w-full aspect-[16/9] flex items-center justify-center text-sm text-gray-400">
                                No Image Available
                            </div>
                        @endif
                    </div>

                    {{-- Content --}}
                    <div class="space-y-6 text-[15px] md:text-[16px] text-gray-700 leading-8 text-justify">
                        {!! nl2br(e($article->berita)) !!}
                    </div>

                    {{-- Bottom Navigation --}}
                    <div class="mt-12 pt-8 border-t border-gray-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <a
                            href="{{ route('web.newsCareers') }}"
                            class="inline-flex items-center text-sm font-medium text-[#192229] hover:text-[#721c1c] transition-colors"
                        >
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                            Back to News & Careers
                        </a>

                        <div class="text-xs text-gray-400">
                            Published on {{ \Carbon\Carbon::parse($article->tanggal_publish)->format('F d, Y') }}
                        </div>
                    </div>
                </article>

                {{-- Sidebar --}}
                <aside class="lg:col-span-4">
                    <div class="sticky top-24 space-y-6">

                        {{-- Article Info --}}
                        <div class="bg-gray-50 border border-gray-100 rounded-lg p-5 space-y-4">
                            <h2 class="text-sm font-bold text-[#192229] uppercase tracking-wider">
                                Article Information
                            </h2>

                            <div class="space-y-3 text-sm">
                                <div>
                                    <p class="text-xs text-gray-400 mb-1">Category</p>
                                    <p class="font-medium text-[#192229]">{{ $article->kategori }}</p>
                                </div>

                                <div>
                                    <p class="text-xs text-gray-400 mb-1">Published Date</p>
                                    <p class="font-medium text-[#192229]">
                                        {{ \Carbon\Carbon::parse($article->tanggal_publish)->format('F d, Y') }}
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs text-gray-400 mb-1">Author</p>
                                    <p class="font-medium text-[#192229]">{{ $article->author }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Latest Articles --}}
                        <div class="bg-white border border-gray-200/70 rounded-lg p-5 shadow-sm">
                            <div class="space-y-1 mb-5">
                                <h2 class="text-sm font-bold text-[#192229] uppercase tracking-wider">
                                    Latest Articles
                                </h2>
                                <div class="w-8 h-0.5 bg-[#721c1c]"></div>
                            </div>

                            <div class="space-y-4">
                                @forelse ($this->latestArticles as $item)
                                    <a
                                        wire:key="latest-article-{{ $item->id }}"
                                        href="{{ route('web.newsCareerDetail', $item->slug) }}"
                                        class="block group"
                                    >
                                        <div class="flex gap-3">
                                            <div class="w-20 h-16 rounded bg-gray-100 overflow-hidden flex-shrink-0">
                                                @if ($item->image)
                                                    <img
                                                        src="{{ asset('storage/' . $item->image) }}"
                                                        alt="{{ $item->title }}"
                                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                                    >
                                                @else
                                                    <div class="w-full h-full flex items-center justify-center text-[10px] text-gray-400">
                                                        No Image
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="space-y-1">
                                                <p class="text-[10px] font-semibold text-[#721c1c] uppercase tracking-wider">
                                                    {{ \Carbon\Carbon::parse($item->tanggal_publish)->format('M d, Y') }}
                                                </p>

                                                <h3 class="text-xs font-semibold text-[#192229] leading-snug line-clamp-2 group-hover:text-[#721c1c] transition-colors">
                                                    {{ $item->title }}
                                                </h3>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                    <p class="text-xs text-gray-500">
                                        Belum ada artikel lainnya.
                                    </p>
                                @endforelse
                            </div>
                        </div>

                        {{-- Career CTA --}}
                        <div class="bg-[#721c1c] rounded-lg p-5 text-white space-y-3">
                            <p class="text-xs uppercase tracking-wider font-semibold text-white/70">
                                Grow With Us
                            </p>

                            <h2 class="text-lg font-bold leading-snug">
                                Build Your Career Path With Us
                            </h2>

                            <p class="text-xs leading-relaxed text-white/80">
                                Send your latest CV and portfolio to our recruitment division.
                            </p>

                            <a
                                href="mailto:career@herlinaastrid.com"
                                class="inline-block text-[12px] font-semibold bg-white text-[#721c1c] px-4 py-2 rounded hover:bg-gray-100 transition-colors"
                            >
                                Apply via Email
                            </a>
                        </div>

                    </div>
                </aside>

            </div>
        </section>

    </main>
</div>