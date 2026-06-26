<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\NewsAndCareer;

new class extends Component
{
    #[Computed]
    public function news()
    {
        return NewsAndCareer::query()
            ->latest('tanggal_publish')
            ->get();
    }

    public function badgeColor(string $status): string
    {
        return match ($status) {
            'published' => 'green',
            'draft' => 'zinc',
            'drop' => 'red',
            default => 'zinc',
        };
    }

    public function statusLabel(string $status): string
    {
        return match ($status) {
            'published' => 'Published',
            'draft' => 'Draft',
            'drop' => 'Drop',
            default => ucfirst($status),
        };
    }
};
?>

<div>
    <div>
        <flux:button href="{{ route('backend.newsAdd') }}">Add New</flux:button>
    </div>

    <br>

    <div>
        <flux:card>
            <flux:table>
                <flux:table.columns>
                    <flux:table.column>No</flux:table.column>
                    <flux:table.column>Judul Berita</flux:table.column>
                    <flux:table.column>Kategori</flux:table.column>
                    <flux:table.column>Tanggal</flux:table.column>
                    <flux:table.column>Status</flux:table.column>
                    <flux:table.column>Action</flux:table.column>
                </flux:table.columns>

                <flux:table.rows>
                    @forelse ($this->news as $index => $item)
                        <flux:table.row wire:key="news-{{ $item->id }}">
                            <flux:table.cell>{{ $index + 1 }}</flux:table.cell>

                            <flux:table.cell>
                                {{ $item->title }}
                            </flux:table.cell>

                            <flux:table.cell>
                                {{ $item->kategori }}
                            </flux:table.cell>

                            <flux:table.cell>
                                {{ \Carbon\Carbon::parse($item->tanggal_publish)->format('d M Y') }}
                            </flux:table.cell>

                            <flux:table.cell class="py-0">
                                <flux:badge color="{{ $this->badgeColor($item->status) }}" size="sm">
                                    {{ $this->statusLabel($item->status) }}
                                </flux:badge>
                            </flux:table.cell>

                            <flux:table.cell variant="strong">
                                <flux:button
                                    variant="filled"
                                    size="sm"
                                    href="{{ route('backend.newsEdit', $item->id) }}"
                                >
                                    View
                                </flux:button>
                            </flux:table.cell>
                        </flux:table.row>
                    @empty
                        <flux:table.row>
                            <flux:table.cell colspan="6" class="text-center text-zinc-500">
                                Belum ada data berita.
                            </flux:table.cell>
                        </flux:table.row>
                    @endforelse
                </flux:table.rows>
            </flux:table>
        </flux:card>
    </div>
</div>