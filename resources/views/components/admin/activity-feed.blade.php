@props(['activities' => []])

<div class="lg:col-span-4 bg-white p-8 rounded-xl border border-[#E2E8F0] shadow-[0px_4px_12px_rgba(0,35,78,0.05)]">
    <h3 class="font-h3 text-h3 text-primary mb-6">Aktivitas Terbaru</h3>
    @if(count($activities) > 0)
        <div class="space-y-6">
            @foreach($activities as $activity)
            <div class="flex gap-4">
                <div class="h-2 w-2 rounded-full bg-{{ $activity['color'] ?? 'blue' }}-900 mt-2 shrink-0"></div>
                <div>
                    <p class="text-sm font-semibold text-primary">{{ $activity['title'] ?? 'Activity' }}</p>
                    <p class="text-caption text-secondary">{{ $activity['description'] ?? 'Description' }}</p>
                    <span class="text-[10px] text-slate-400 mt-1 block">{{ $activity['time'] ?? 'Time' }}</span>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div class="space-y-6">
            <div class="flex gap-4">
                <div class="h-2 w-2 rounded-full bg-slate-400 mt-2 shrink-0"></div>
                <div>
                    <p class="text-sm font-semibold text-primary">Tidak ada aktivitas</p>
                    <p class="text-caption text-secondary">Belum ada aktivitas terbaru.</p>
                    <span class="text-[10px] text-slate-400 mt-1 block">-</span>
                </div>
            </div>
        </div>
    @endif
    <button class="w-full mt-8 py-3 border border-slate-200 text-primary font-label-sm rounded-lg hover:bg-slate-50 transition-colors">
        Lihat Log Audit
    </button>
</div>