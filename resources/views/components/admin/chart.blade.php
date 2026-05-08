@props(['chartData' => []])

<div class="lg:col-span-8 bg-white p-8 rounded-xl border border-[#E2E8F0] shadow-[0px_4px_12px_rgba(0,35,78,0.05)]">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h3 class="font-h3 text-h3 text-primary">Pertumbuhan Konten</h3>
            <p class="text-caption text-secondary">Frekuensi publikasi selama 6 bulan terakhir</p>
        </div>
        <select class="bg-slate-50 border-slate-200 rounded-lg text-sm px-4 py-2 font-label-sm">
            <option>6 Bulan Terakhir</option>
            <option>Tahun Terakhir</option>
        </select>
    </div>
    @if(count($chartData) > 0)
        <div class="h-64 flex items-end justify-between gap-2 relative">
            @foreach($chartData as $data)
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full bg-slate-100 rounded-t-sm h-[{{ $data['height'] ?? 40 }}%] group-hover:bg-blue-900/20 transition-colors"></div>
                <span class="text-[10px] text-slate-400 font-label-sm uppercase">{{ $data['label'] ?? 'Month' }}</span>
            </div>
            @endforeach
        </div>
    @else
        <div class="h-64 flex items-end justify-between gap-2 relative">
            <!-- Placeholder chart -->
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full bg-slate-100 rounded-t-sm h-[40%] group-hover:bg-blue-900/20 transition-colors"></div>
                <span class="text-[10px] text-slate-400 font-label-sm uppercase">Jan</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full bg-slate-100 rounded-t-sm h-[55%] group-hover:bg-blue-900/20 transition-colors"></div>
                <span class="text-[10px] text-slate-400 font-label-sm uppercase">Feb</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full bg-slate-100 rounded-t-sm h-[45%] group-hover:bg-blue-900/20 transition-colors"></div>
                <span class="text-[10px] text-slate-400 font-label-sm uppercase">Mar</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full bg-blue-900 rounded-t-sm h-[85%]"></div>
                <span class="text-[10px] text-slate-900 font-bold font-label-sm uppercase">Apr</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full bg-slate-100 rounded-t-sm h-[70%] group-hover:bg-blue-900/20 transition-colors"></div>
                <span class="text-[10px] text-slate-400 font-label-sm uppercase">Mei</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full bg-slate-100 rounded-t-sm h-[75%] group-hover:bg-blue-900/20 transition-colors"></div>
                <span class="text-[10px] text-slate-400 font-label-sm uppercase">Jun</span>
            </div>
        </div>
    @endif
</div>