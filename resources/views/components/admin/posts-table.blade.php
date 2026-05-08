@props(['posts' => []])

<div class="lg:col-span-12 bg-white rounded-xl border border-[#E2E8F0] shadow-[0px_4px_12px_rgba(0,35,78,0.05)] overflow-hidden">
    <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50">
        <h3 class="font-h3 text-h3 text-primary">Postingan Terbaru</h3>
        <div class="flex gap-2">
            <button class="p-2 hover:bg-white rounded border border-slate-200 transition-colors">
                <span class="material-symbols-outlined text-slate-500" data-icon="filter_list">filter_list</span>
            </button>
            <button class="p-2 hover:bg-white rounded border border-slate-200 transition-colors">
                <span class="material-symbols-outlined text-slate-500" data-icon="download">download</span>
            </button>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-[#F1F5F9] border-b border-slate-200">
                <tr>
                    <th class="px-6 py-4 font-label-sm text-xs text-slate-500 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-4 font-label-sm text-xs text-slate-500 uppercase tracking-wider">Penulis</th>
                    <th class="px-6 py-4 font-label-sm text-xs text-slate-500 uppercase tracking-wider">Kategori</th>
                    <th class="px-6 py-4 font-label-sm text-xs text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 font-label-sm text-xs text-slate-500 uppercase tracking-wider text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                    <tr class="hover:bg-blue-900/5 transition-colors group">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-primary block">{{ $post['title'] ?? 'Untitled' }}</span>
                            <span class="text-caption text-secondary">{{ $post['published_at'] ?? 'Draft' }}</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-secondary">{{ $post['author'] ?? 'Unknown' }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-slate-100 text-slate-600 rounded text-[10px] font-bold uppercase">{{ $post['category'] ?? 'Uncategorized' }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="flex items-center gap-2 text-{{ $post['status_color'] ?? 'emerald' }}-600 font-label-sm text-xs">
                                <span class="h-1.5 w-1.5 rounded-full bg-{{ $post['status_color'] ?? 'emerald' }}-600"></span>
                                {{ $post['status'] ?? 'Active' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <a href="{{ $post['edit_url'] ?? '#' }}" class="p-2 text-slate-400 hover:text-blue-900 transition-colors">
                                    <span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
                                </a>
                                <form method="POST" action="{{ $post['delete_url'] ?? '#' }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-slate-400 hover:text-red-600 transition-colors" onclick="return confirm('Are you sure?')">
                                        <span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-slate-500">
                            <span class="material-symbols-outlined text-4xl mb-2 block">article</span>
                            Belum ada postingan.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="p-4 bg-slate-50 border-t border-slate-100 flex justify-center">
        <a href="{{ route('dashboard.posts') }}" class="text-primary font-label-sm text-xs hover:underline">Lihat Semua Postingan</a>
    </div>
</div>