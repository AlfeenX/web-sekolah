@props(['post' => null])

@if($post)
<div class="lg:col-span-12 bg-white rounded-xl border border-[#E2E8F0] shadow-[0px_4px_12px_rgba(0,35,78,0.05)] overflow-hidden flex flex-col md:flex-row">
    <div class="md:w-1/3 h-64 md:h-auto overflow-hidden">
        <img alt="{{ $post['image_alt'] ?? 'Featured Post' }}" class="h-full w-full object-cover" src="{{ $post['image'] ?? 'https://via.placeholder.com/400x300' }}" />
    </div>
    <div class="p-8 md:w-2/3 flex flex-col justify-center">
        <span class="inline-block px-3 py-1 bg-blue-900 text-white font-label-sm text-[10px] rounded mb-4 w-fit uppercase tracking-wider">{{ $post['badge'] ?? 'Featured' }}</span>
        <h3 class="font-h2 text-h2 text-primary">{{ $post['title'] ?? 'Post Title' }}</h3>
        <p class="font-body-md text-secondary mt-2 mb-6">{{ $post['description'] ?? 'Post description.' }}</p>
        <div class="flex items-center gap-6">
            <a href="{{ $post['edit_url'] ?? '#' }}" class="px-6 h-12 bg-blue-900 text-white font-label-sm rounded-lg hover:opacity-90 transition-opacity">Edit {{ $post['type'] ?? 'Post' }}</a>
            <a href="{{ $post['preview_url'] ?? '#' }}" class="text-primary font-label-sm flex items-center gap-2 hover:underline">
                <span class="material-symbols-outlined" data-icon="visibility">visibility</span>
                Pratinjau Versi Publik
            </a>
        </div>
    </div>
</div>
@else
<div class="lg:col-span-12 bg-white rounded-xl border border-[#E2E8F0] shadow-[0px_4px_12px_rgba(0,35,78,0.05)] overflow-hidden flex flex-col md:flex-row">
    <div class="md:w-1/3 h-64 md:h-auto overflow-hidden bg-slate-100 flex items-center justify-center">
        <span class="material-symbols-outlined text-slate-400 text-6xl">article</span>
    </div>
    <div class="p-8 md:w-2/3 flex flex-col justify-center">
        <span class="inline-block px-3 py-1 bg-slate-200 text-slate-600 font-label-sm text-[10px] rounded mb-4 w-fit uppercase tracking-wider">Tidak ada postingan unggulan</span>
        <h3 class="font-h2 text-h2 text-primary">Belum ada postingan unggulan</h3>
        <p class="font-body-md text-secondary mt-2 mb-6">Postingan unggulan akan ditampilkan di sini.</p>
        <div class="flex items-center gap-6">
            <a href="#" class="px-6 h-12 bg-blue-900 text-white font-label-sm rounded-lg hover:opacity-90 transition-opacity">Buat Postingan Baru</a>
        </div>
    </div>
</div>
@endif