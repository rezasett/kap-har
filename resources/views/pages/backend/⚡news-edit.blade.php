<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\NewsAndCareer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

new class extends Component
{
    use WithFileUploads;

    public int $newsId;

    public string $title = '';
    public string $category = '';
    public string $published_at = '';
    public string $content = '';
    public string $publish = 'draft';

    public $thumbnail = null;
    public ?string $currentImage = null;

    public function mount($id): void
    {
        $news = NewsAndCareer::findOrFail($id);

        $this->newsId = $news->id;
        $this->title = $news->title;
        $this->category = $news->kategori;
        $this->published_at = $news->tanggal_publish;
        $this->content = $news->berita;
        $this->publish = $news->status;
        $this->currentImage = $news->image;
    }

    protected function rules(): array
    {
        return [
            'title'        => ['required', 'string', 'max:255'],
            'category'     => ['required', 'string', 'max:255'],
            'published_at' => ['required', 'date'],
            'content'      => ['required', 'string'],
            'thumbnail'    => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'publish'      => ['required', 'in:draft,published,drop'],
        ];
    }

    protected function messages(): array
    {
        return [
            'title.required'        => 'Judul berita wajib diisi.',
            'category.required'     => 'Kategori wajib dipilih.',
            'published_at.required' => 'Tanggal publikasi wajib diisi.',
            'content.required'      => 'Isi berita wajib diisi.',
            'thumbnail.image'       => 'Thumbnail harus berupa gambar.',
            'thumbnail.mimes'       => 'Format thumbnail harus jpg, jpeg, png, atau webp.',
            'thumbnail.max'         => 'Ukuran thumbnail maksimal 2MB.',
            'publish.required'      => 'Status publish wajib dipilih.',
        ];
    }

    public function updatedThumbnail(): void
    {
        $this->validateOnly('thumbnail');
    }

    public function save()
    {
        $validated = $this->validate();

        $news = NewsAndCareer::findOrFail($this->newsId);

        $imagePath = $this->currentImage;

        if ($this->thumbnail) {
            if ($this->currentImage && Storage::disk('public')->exists($this->currentImage)) {
                Storage::disk('public')->delete($this->currentImage);
            }

            $imagePath = $this->thumbnail->store('news', 'public');
        }

        $news->update([
            'title'           => $validated['title'],
            'slug'            => $this->generateUniqueSlug($validated['title']),
            'kategori'        => $validated['category'],
            'tanggal_publish' => $validated['published_at'],
            'berita'          => $validated['content'],
            'image'           => $imagePath,
            'status'          => $validated['publish'],
            'author'          => auth()->user()->name ?? $news->author,
        ]);

        session()->flash('success', 'Berita berhasil diperbarui.');

        return $this->redirectRoute('backend.news', navigate: true);
    }

    private function generateUniqueSlug(string $title): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (
            NewsAndCareer::where('slug', $slug)
                ->where('id', '!=', $this->newsId)
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
?>

<div class="max-w-2xl">
    <flux:heading size="xl" level="1">Edit Berita</flux:heading>
    <flux:subheading>Isi formulir di bawah untuk memperbarui artikel keuangan terbaru.</flux:subheading>

    <div class="mt-8 space-y-6">
        <form wire:submit="save" class="space-y-6">

            {{-- Judul Berita --}}
            <flux:input
                wire:model="title"
                label="Judul Berita"
                placeholder="Contoh: Pentingnya Financial Due Diligence..."
            />

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                {{-- Kategori --}}
                <flux:select wire:model="category" label="Kategori" placeholder="Pilih kategori...">
                    <flux:select.option value="News">News</flux:select.option>
                    <flux:select.option value="Job & Career">Job & Career</flux:select.option>
                    <flux:select.option value="Info">Info</flux:select.option>
                </flux:select>

                {{-- Tanggal Publish --}}
                <flux:input
                    wire:model="published_at"
                    type="date"
                    label="Tanggal Publikasi"
                />
            </div>

            {{-- Ringkasan/Konten --}}
            <flux:textarea
                wire:model="content"
                label="Isi Berita"
                placeholder="Tulis ringkasan atau isi berita di sini..."
                rows="20"
            />

            {{-- Upload Thumbnail --}}
            <flux:field>
                <flux:label>Thumbnail Berita</flux:label>

                <input
                    type="file"
                    wire:model="thumbnail"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-zinc-100 file:text-zinc-700 hover:file:bg-zinc-200 dark:file:bg-zinc-800 dark:file:text-zinc-200"
                >

                <flux:error name="thumbnail" />

                {{-- Preview Thumbnail Baru --}}
                @if ($thumbnail)
                    <div class="mt-4">
                        <p class="text-sm text-zinc-500 mb-2">Preview thumbnail baru:</p>

                        <div class="relative w-48 h-32 rounded-xl overflow-hidden border border-zinc-200">
                            <img
                                src="{{ $thumbnail->temporaryUrl() }}"
                                class="object-cover w-full h-full"
                            >
                        </div>
                    </div>

                {{-- Preview Thumbnail Lama --}}
                @elseif ($currentImage)
                    <div class="mt-4">
                        <p class="text-sm text-zinc-500 mb-2">Thumbnail saat ini:</p>

                        <div class="relative w-48 h-32 rounded-xl overflow-hidden border border-zinc-200">
                            <img
                                src="{{ asset('storage/' . $currentImage) }}"
                                class="object-cover w-full h-full"
                            >
                        </div>
                    </div>
                @endif
            </flux:field>

            <div>
                {{-- Publish --}}
                <flux:select wire:model="publish" label="Publish" placeholder="Pilih status...">
                    <flux:select.option value="drop">Drop</flux:select.option>
                    <flux:select.option value="draft">Draft</flux:select.option>
                    <flux:select.option value="published">Published</flux:select.option>
                </flux:select>
            </div>

            <div class="flex justify-end gap-4">
                <flux:spacer />

                <flux:button
                    type="button"
                    variant="primary"
                    href="{{ route('backend.news') }}"
                >
                    Batal
                </flux:button>

                <flux:button type="submit" variant="primary">
                    Simpan Perubahan
                </flux:button>
            </div>
        </form>
    </div>
</div>