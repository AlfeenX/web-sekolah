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

    <!-- Form Section -->
    <section>
        <h1 class="text-3xl font-bold text-slate-900">Tambah Postingan Baru</h1>
        
        <form action="{{ route('dashboard.posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <!-- Title Section -->
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Informasi Dasar</p>
                <div>
                    <label for="title" class="block text-sm font-semibold text-slate-900 mb-2">Judul Postingan</label>
                    <input type="text" name="title" id="title" required placeholder="Masukkan judul postingan yang menarik..." class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all" />
                </div>
            </div>

            <!-- Featured Image Section -->
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Gambar Unggulan</p>
                <div class="relative rounded-2xl border-2 border-dashed border-slate-300 bg-slate-50/50 p-8 transition hover:border-blue-400 hover:bg-blue-50/30 cursor-pointer group" id="imageDropZone">
                    <input type="file" name="image" id="image" accept="image/*" class="hidden" />
                    <div class="flex flex-col items-center justify-center text-center p-8" id="imageUploadPrompt">
                        <div class="rounded-2xl bg-gradient-to-br from-blue-100 to-cyan-100 p-4 mb-4 group-hover:from-blue-200 group-hover:to-cyan-200 transition-colors">
                            <span class="material-symbols-outlined text-4xl text-blue-600">image</span>
                        </div>
                        <p class="text-sm font-semibold text-slate-900">Klik untuk unggah atau seret gambar di sini</p>
                        <p class="text-xs text-slate-500 mt-1">Format: JPG, PNG, WebP (Maks: 5MB)</p>
                    </div>
                    <div id="imagePreview" class="hidden"></div>
                </div>
            </div>

            <!-- Metadata Grid -->
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Metadata Postingan</p>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <label for="category" class="block text-sm font-semibold text-slate-900 mb-2">Kategori</label>
                        <select name="category_id" id="category" required class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="1">Berita</option>
                            <option value="2">Pengumuman</option>
                            <option value="3">Kegiatan</option>
                            <option value="4">Tips & Trik</option>
                        </select>
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-semibold text-slate-900 mb-2">Status Publikasi</label>
                        <select name="status" id="status" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all">
                            <option value="draft">Draft</option>
                            <option value="review">Menunggu Review</option>
                            <option value="published">Terbitkan Sekarang</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Tags Section -->
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Tag Postingan</p>
                <div>
                    <label for="tags" class="block text-sm font-semibold text-slate-900 mb-2">Tambahkan Tag (pisahkan dengan koma)</label>
                    <input type="text" name="tags" id="tags" placeholder="edukasi, sekolah, pembelajaran, ..." class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all" />
                </div>
            </div>

            <!-- Rich Text Editor Section -->
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Konten Postingan</p>
                <div class="rounded-xl border border-slate-200 overflow-hidden bg-white focus-within:ring-2 focus-within:ring-blue-100">
                    <div id="editor" class="h-80 bg-white"></div>
                    <input type="hidden" name="content" id="content"/>
                </div>
                <p class="text-xs text-slate-500">Gunakan editor untuk membuat konten yang menarik dengan formatting dan media yang sesuai.</p>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-4 pt-4 border-t border-slate-200">
                <button type="submit" class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/30 hover:shadow-lg hover:from-blue-700 hover:to-cyan-700 transition-all">
                    <span class="material-symbols-outlined text-base">save</span>
                    Simpan Postingan
                </button>
                <a href="{{ route('dashboard.posts.index') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                    <span class="material-symbols-outlined text-base">arrow_back</span>
                    Batal
                </a>
            </div>
        </form>
    </section>
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
                [{ list: 'ordered'}, { list: 'bullet' }],
                [{ align: [] }],
                ['link', 'image', 'video'],
                ['clean']
            ]
        }
    });

    // Update hidden input on text change
    quill.on('text-change', function() {
        document.querySelector('#content').value = quill.root.innerHTML;
    });

    // Save Quill content to hidden input on form submit
    const form = document.querySelector('form');
    form.addEventListener('submit', function() {
        document.querySelector('#content').value = quill.root.innerHTML;
    });

    // Image drag and drop
    const imageDropZone = document.getElementById('imageDropZone');
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');

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
    }
</script>
@endpush