@props(['metrics' => []])

<section class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @if(count($metrics) > 0)
        @foreach($metrics as $metric)
        <div class="bg-white p-6 rounded-xl border border-[#E2E8F0] shadow-[0px_4px_12px_rgba(0,35,78,0.05)] hover:border-blue-900/20 transition-all group">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-blue-50 rounded-lg text-blue-900 group-hover:bg-blue-900 group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined" data-icon="{{ $metric['icon'] ?? 'analytics' }}">{{ $metric['icon'] ?? 'analytics' }}</span>
                </div>
                <span class="text-emerald-600 font-label-sm text-xs flex items-center bg-emerald-50 px-2 py-1 rounded">{{ $metric['change'] ?? '+0%' }}</span>
            </div>
            <h3 class="text-slate-500 font-label-sm text-xs uppercase tracking-wider">{{ $metric['label'] ?? 'Metric' }}</h3>
            <p class="font-h1 text-h1 text-primary mt-1">{{ number_format($metric['value'] ?? 0) }}</p>
        </div>
        @endforeach
    @else
        <!-- Placeholder metrics -->
        <div class="bg-white p-6 rounded-xl border border-[#E2E8F0] shadow-[0px_4px_12px_rgba(0,35,78,0.05)] hover:border-blue-900/20 transition-all group">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-slate-500 font-label-sm text-xs uppercase tracking-wider">Total Postingan</h3>
                <span class="text-slate-400 font-label-sm text-xs flex items-center bg-slate-50 px-2 py-1 rounded">No data</span>
            </div>
            <p class="font-h1 text-h1 text-primary mt-1">0</p>
        </div>
        <div class="bg-white p-6 rounded-xl border border-[#E2E8F0] shadow-[0px_4px_12px_rgba(0,35,78,0.05)] hover:border-blue-900/20 transition-all group">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-slate-500 font-label-sm text-xs uppercase tracking-wider">Kategori</h3>
                <span class="text-slate-400 font-label-sm text-xs flex items-center bg-slate-50 px-2 py-1 rounded">No data</span>
            </div>
            <p class="font-h1 text-h1 text-primary mt-1">0</p>
        </div>
        <div class="bg-white p-6 rounded-xl border border-[#E2E8F0] shadow-[0px_4px_12px_rgba(0,35,78,0.05)] hover:border-blue-900/20 transition-all group">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-slate-500 font-label-sm text-xs uppercase tracking-wider">Tag</h3>
                <span class="text-slate-400 font-label-sm text-xs flex items-center bg-slate-50 px-2 py-1 rounded">No data</span>
            </div>
            <p class="font-h1 text-h1 text-primary mt-1">0</p>
        </div>
        <div class="bg-white p-6 rounded-xl border border-[#E2E8F0] shadow-[0px_4px_12px_rgba(0,35,78,0.05)] hover:border-blue-900/20 transition-all group">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-slate-500 font-label-sm text-xs uppercase tracking-wider">Pengguna</h3>
                <span class="text-slate-400 font-label-sm text-xs flex items-center bg-slate-50 px-2 py-1 rounded">No data</span>
            </div>
            <p class="font-h1 text-h1 text-primary mt-1">0</p>
        </div>
    @endif
</section>