@extends('layouts.admin')

@push('styles')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style>
    .ql-container {
        font-size: 1rem;
        font-family: inherit;
    }

    .ql-editor {
        min-height: 320px;
        padding: 16px;
    }

    .ql-toolbar {
        border-bottom: 1px solid #e2e8f0 !important;
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
        border-radius: 12px 12px 0 0;
    }

    .ql-container {
        border: none !important;
    }
</style>
@endpush

@section('content')
<div class="p-8 max-w-full mx-auto space-y-8">

    {{-- Validation Error Alert --}}
    @if ($errors->any())
        <div class="rounded-xl border border-red-200 bg-red-50 p-4 flex gap-3">
            <span class="material-symbols-outlined text-red-500 flex-shrink-0">error</span>
            <div>
                <p class="text-sm font-semibold text-red-700">Terdapat kesalahan pada form:</p>
                <ul class="mt-1 list-disc list-inside text-sm text-red-600 space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    {{-- Success Flash --}}
    @if (session('success'))
        <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-4 flex gap-3">
            <span class="material-symbols-outlined text-emerald-500 flex-shrink-0">check_circle</span>
            <p class="text-sm font-semibold text-emerald-700">{{ session('success') }}</p>
        </div>
    @endif

    <!-- Form Section -->
    <section>
        <h1 class="text-3xl font-bold text-slate-900">Edit Postingan</h1>

        <form action="{{ route('dashboard.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8 mt-6">
            @csrf
            @method('PUT')

            <!-- Title Section -->
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Informasi Dasar</p>
                <div>
                    <label for="title" class="block text-sm font-semibold text-slate-900 mb-2">Judul Postingan</label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        required
                        placeholder="Masukkan judul postingan yang menarik..."
                        class="w-full rounded-xl border @error('title') border-red-400 bg-red-50 @else border-slate-200 bg-slate-50 @enderror px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all"
                        value="{{ old('title', $post->title) }}"
                    />
                    @error('title')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Featured Image Section -->
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Gambar Unggulan</p>

                {{-- Hidden field to signal image removal --}}
                <input type="hidden" name="remove_image" id="remove_image" value="0" />

                <div class="relative rounded-2xl border-2 border-dashed border-slate-300 bg-slate-50/50 {{ $post->image ? 'p-0 overflow-hidden' : 'p-8' }} transition hover:border-blue-400 hover:bg-blue-50/30 cursor-pointer group" id="imageDropZone">
                    <input type="file" name="image" id="image" accept="image/*" class="hidden" />
                    <div class="flex flex-col items-center justify-center text-center {{ $post->image ? 'hidden' : '' }} p-8" id="imageUploadPrompt">
                        <div class="rounded-2xl bg-gradient-to-br from-blue-100 to-cyan-100 p-4 mb-4 group-hover:from-blue-200 group-hover:to-cyan-200 transition-colors">
                            <span class="material-symbols-outlined text-4xl text-blue-600">image</span>
                        </div>
                        <p class="text-sm font-semibold text-slate-900">Klik untuk unggah atau seret gambar di sini</p>
                        <p class="text-xs text-slate-500 mt-1">Format: JPG, PNG, WebP (Maks: 5MB)</p>
                    </div>
                    <div id="imagePreview" class="{{ $post->image ? '' : 'hidden' }}">
                        @if ($post->image)
                            <div class="relative">
                                <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-auto rounded-[14px] object-cover block" alt="Preview" />
                                <button type="button" onclick="event.stopPropagation(); clearImagePreview()" class="absolute top-2 right-2 rounded-full bg-red-500 text-white p-2 hover:bg-red-600 transition">
                                    <span class="material-symbols-outlined text-sm">close</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                @error('image')
                    <p class="text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Metadata Grid -->
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Metadata Postingan</p>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <label for="category" class="block text-sm font-semibold text-slate-900 mb-2">Kategori</label>
                        <select name="category_id" id="category" required class="w-full rounded-xl border @error('category_id') border-red-400 bg-red-50 @else border-slate-200 bg-slate-50 @enderror px-4 py-3 text-slate-900 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="1" {{ old('category_id', $post->category_id) == 1 ? 'selected' : '' }}>Berita</option>
                            <option value="2" {{ old('category_id', $post->category_id) == 2 ? 'selected' : '' }}>Pengumuman</option>
                            <option value="3" {{ old('category_id', $post->category_id) == 3 ? 'selected' : '' }}>Kegiatan</option>
                            <option value="4" {{ old('category_id', $post->category_id) == 4 ? 'selected' : '' }}>Tips & Trik</option>
                        </select>
                        @error('category_id')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-semibold text-slate-900 mb-2">Status Publikasi</label>
                        <select name="status" id="status" class="w-full rounded-xl border @error('status') border-red-400 bg-red-50 @else border-slate-200 bg-slate-50 @enderror px-4 py-3 text-slate-900 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all">
                            <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="review" {{ old('status', $post->status) == 'review' ? 'selected' : '' }}>Menunggu Review</option>
                            <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Terbitkan Sekarang</option>
                        </select>
                        @error('status')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Tags Section -->
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Tag Postingan</p>
                <div>
                    <label for="tags" class="block text-sm font-semibold text-slate-900 mb-2">Tambahkan Tag (pisahkan dengan koma)</label>
                    <input
                        type="text"
                        name="tags"
                        id="tags"
                        placeholder="edukasi, sekolah, pembelajaran, ..."
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all"
                        value="{{ old('tags', implode(', ', $post->tags->pluck('name')->toArray())) }}"
                    />
                </div>
            </div>

            <!-- Rich Text Editor Section -->
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Konten Postingan</p>
                <div class="rounded-xl border border-slate-200 overflow-hidden bg-white focus-within:ring-2 focus-within:ring-blue-100">
                    <div id="editor" class="h-80 bg-white"></div>
                    <input type="hidden" name="content" id="content" value="{{ old('content', $post->content) }}" />
                </div>
                @error('content')
                    <p class="text-xs text-red-500">{{ $message }}</p>
                @enderror
                <p class="text-xs text-slate-500">Gunakan editor untuk membuat konten yang menarik dengan formatting dan media yang sesuai.</p>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-4 pt-4 border-t border-slate-200">
                <button type="submit" class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/30 hover:shadow-lg hover:from-blue-700 hover:to-cyan-700 transition-all">
                    <span class="material-symbols-outlined text-base">save</span>
                    Simpan Perubahan
                </button>
                <a href="{{ route('dashboard.posts.index') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                    <span class="material-symbols-outlined text-base">arrow_back</span>
                    Batal
                </a>
            </div>
        </form>
    </section>
</div>
@endsection

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    // Initialize Quill editor
    const quill = new Quill('#editor', {
        theme: 'snow',
        placeholder: 'Mulai mengetik konten postingan Anda di sini...',
        modules: {
            toolbar: [
                [{ header: [1, 2, 3, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                [{ align: [] }],
                ['link', 'image', 'video'],
                ['clean']
            ]
        }
    });

    // FIX: Load existing post content into Quill editor
    const existingContent = document.getElementById('content').value;
    if (existingContent) {
        quill.root.innerHTML = existingContent;
    }

    // Sync Quill content to hidden input on every change
    quill.on('text-change', function () {
        document.getElementById('content').value = quill.root.innerHTML;
    });

    // Also sync on form submit as a safety net
    document.querySelector('form').addEventListener('submit', function () {
        document.getElementById('content').value = quill.root.innerHTML;
    });

    // ── Image Drop Zone ──────────────────────────────────────────────────────────
    const imageDropZone = document.getElementById('imageDropZone');
    const imageInput    = document.getElementById('image');
    const imagePreview  = document.getElementById('imagePreview');

    imageDropZone.addEventListener('click', (e) => {
        // Only open file picker when the preview is not visible (no image shown)
        if (imagePreview.classList.contains('hidden')) {
            imageInput.click();
        }
    });

    imageDropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        imageDropZone.classList.add('border-blue-400', 'bg-blue-50');
    });

    imageDropZone.addEventListener('dragleave', () => {
        imageDropZone.classList.remove('border-blue-400', 'bg-blue-50');
    });

    imageDropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        imageDropZone.classList.remove('border-blue-400', 'bg-blue-50');
        if (e.dataTransfer.files.length) {
            imageInput.files = e.dataTransfer.files;
            previewImage();
        }
    });

    imageInput.addEventListener('change', previewImage);

    function previewImage() {
        const file = imageInput.files[0];
        if (!file) return;

        // Validate size client-side (5 MB)
        if (file.size > 5 * 1024 * 1024) {
            alert('Ukuran gambar melebihi batas 5MB. Silakan pilih gambar lain.');
            imageInput.value = '';
            return;
        }

        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.innerHTML = `
                <div class="relative">
                    <img src="${e.target.result}" class="w-full h-auto rounded-[14px] object-cover block" alt="Preview" />
                    <button type="button" onclick="event.stopPropagation(); clearImagePreview()" class="absolute top-2 right-2 rounded-full bg-red-500 text-white p-2 hover:bg-red-600 transition">
                        <span class="material-symbols-outlined text-sm">close</span>
                    </button>
                </div>
            `;
            imagePreview.classList.remove('hidden');
            document.getElementById('imageUploadPrompt').classList.add('hidden');
            // Collapse drop zone padding so image fills edge-to-edge
            imageDropZone.classList.remove('p-8');
            imageDropZone.classList.add('p-0', 'overflow-hidden');
            // Uploading a new image cancels any pending removal
            document.getElementById('remove_image').value = '0';
        };
        reader.readAsDataURL(file);
    }

    function clearImagePreview() {
        imageInput.value = '';
        imagePreview.innerHTML = '';
        imagePreview.classList.add('hidden');
        document.getElementById('imageUploadPrompt').classList.remove('hidden');
        // Restore drop zone padding
        imageDropZone.classList.remove('p-0', 'overflow-hidden');
        imageDropZone.classList.add('p-8');
        // Mark existing image for removal when the user clears the preview
        document.getElementById('remove_image').value = '1';
    }
</script>
@endpush