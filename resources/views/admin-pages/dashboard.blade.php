@extends('layouts.admin')

@section('content')
@php
$metrics = [
    ['label' => 'Total Postingan', 'value' => '248', 'icon' => 'article', 'change' => '+12% bulan ini', 'changeType' => 'up'],
    ['label' => 'Pengunjung Aktif', 'value' => '8,492', 'icon' => 'group', 'change' => '+28% bulan ini', 'changeType' => 'up'],
    ['label' => 'Interaksi Konten', 'value' => '1,284', 'icon' => 'favorite', 'change' => '+8% bulan ini', 'changeType' => 'up'],
    ['label' => 'Tingkat Retensi', 'value' => '78.5%', 'icon' => 'trending_up', 'change' => '+5% bulan ini', 'changeType' => 'up'],
];


$activities = [
    ['action' => 'Postingan Baru', 'description' => 'Panduan Pendaftaran Siswa Baru', 'time' => '2 jam lalu', 'icon' => 'article'],
    ['action' => 'Komentar Baru', 'description' => 'Pada postingan "Jadwal Ujian"', 'time' => '5 jam lalu', 'icon' => 'comment'],
    ['action' => 'Postingan Diperbarui', 'description' => 'Berita Acara Wisata Edukatif', 'time' => '1 hari lalu', 'icon' => 'edit'],
];
@endphp

<div class="p-8 max-w-full mx-auto space-y-8">
    <!-- Hero Welcome Section -->
    <section class="relative overflow-hidden rounded-[36px] bg-gradient-to-br from-slate-950 via-blue-950 to-slate-900 text-white">
        <div class="absolute -left-32 -top-32 h-80 w-80 rounded-full bg-blue-600/20 blur-3xl"></div>
        <div class="absolute -right-24 top-1/2 h-72 w-72 rounded-full bg-cyan-500/15 blur-3xl"></div>
        
        <div class="relative z-10 grid gap-6 lg:grid-cols-[1fr_auto] items-center p-8">
            <div>
                <p class="text-sm uppercase tracking-[0.28em] text-cyan-200/80">Selamat Datang</p>
                <h1 class="mt-3 text-5xl font-h1 tracking-tight leading-tight">Halo, {{ auth()->user()->name ?? 'Admin' }}</h1>
                <p class="mt-4 max-w-2xl text-base leading-8 text-slate-200/75">Pantau performa konten sekolah, kelola postingan, dan lihat insights real-time dari dasbor lengkap kami.</p>
                
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ url('/dashboard/posts/create') }}" class="inline-flex items-center gap-2 rounded-full bg-white/12 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-slate-950/20 ring-1 ring-white/10 transition hover:bg-white/20">
                        <span class="material-symbols-outlined text-base">add_circle</span>
                        Buat Postingan Baru
                    </a>
                    <a href="#" class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm text-slate-100 transition hover:bg-white/10">
                        <span class="material-symbols-outlined text-base">analytics</span>
                        Laporan Lengkap
                    </a>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid gap-3 w-full lg:w-auto">
                <div class="rounded-[24px] border border-white/10 bg-white/5 p-5 backdrop-blur-xl text-center lg:text-right">
                    <p class="text-xs uppercase tracking-[0.24em] text-cyan-200/80">Hari Ini</p>
                    <div class="mt-3 text-3xl font-semibold">156</div>
                    <p class="mt-1 text-xs text-slate-200/75">Pengunjung baru</p>
                </div>
                <div class="rounded-[24px] border border-white/10 bg-white/5 p-5 backdrop-blur-xl text-center lg:text-right">
                    <p class="text-xs uppercase tracking-[0.24em] text-cyan-200/80">Minggu Ini</p>
                    <div class="mt-3 text-3xl font-semibold">8</div>
                    <p class="mt-1 text-xs text-slate-200/75">Postingan baru</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Metrics Grid -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($metrics as $metric)
        <div class="group rounded-[28px] border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-300">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm uppercase tracking-[0.24em] text-slate-500">{{ $metric['label'] }}</p>
                    <div class="mt-3 text-4xl font-semibold text-slate-900">{{ $metric['value'] }}</div>
                    <p class="mt-2 flex items-center gap-1 text-xs font-medium @if($metric['changeType'] === 'up') text-emerald-600 @else text-red-600 @endif">
                        <span class="material-symbols-outlined text-sm">{{ $metric['changeType'] === 'up' ? 'trending_up' : 'trending_down' }}</span>
                        {{ $metric['change'] }}
                    </p>
                </div>
                <div class="rounded-2xl bg-gradient-to-br from-blue-100 to-cyan-100 p-3 group-hover:from-blue-200 group-hover:to-cyan-200 transition-colors">
                    <span class="material-symbols-outlined text-blue-700 text-2xl">{{ $metric['icon'] }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <!-- Content Grid -->
    <section class="grid gap-6 lg:grid-cols-3">
        <!-- Activity Feed Card -->
        <div class="lg:col-span-1 rounded-[32px] border border-slate-200 bg-white p-6 shadow-sm">
            <div class="mb-6">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Aktivitas Terbaru</p>
                <h2 class="mt-2 text-2xl font-semibold text-slate-900">Feed Real-Time</h2>
            </div>
            
            <div class="space-y-4">
                @foreach($activities as $activity)
                <div class="flex gap-4 rounded-2xl border border-slate-100 bg-slate-50/50 p-4 hover:bg-slate-50 transition-colors">
                    <div class="flex-shrink-0">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-100 to-cyan-100">
                            <span class="material-symbols-outlined text-blue-700 text-lg">{{ $activity['icon'] }}</span>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-slate-900">{{ $activity['action'] }}</p>
                        <p class="text-xs text-slate-500 line-clamp-1">{{ $activity['description'] }}</p>
                        <p class="mt-1 text-xs text-slate-400">{{ $activity['time'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            
            <a href="#" class="mt-6 block text-center rounded-2xl border border-slate-200 bg-slate-50/50 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                Lihat Semua Aktivitas
            </a>
        </div>

        <!-- Chart Section -->
        <div class="lg:col-span-2 rounded-[32px] border border-slate-200 bg-white p-6 shadow-sm">
            <div class="mb-6">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Pertumbuhan Konten</p>
                <h2 class="mt-2 text-2xl font-semibold text-slate-900">Statistik 30 Hari Terakhir</h2>
            </div>
            
            <!-- Placeholder Chart -->
            <div class="flex h-64 items-end justify-between gap-2 rounded-2xl border border-slate-100 bg-slate-50/50 p-6">
                @for($i = 0; $i < 12; $i++)
                <div class="flex flex-1 flex-col items-center gap-2">
                    <div class="w-full rounded-t-lg bg-gradient-to-t from-blue-600 to-blue-400" @style(['height: ' . rand(40, 200) . 'px'])></div>
                    <span class="text-[10px] text-slate-500">{{ ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'][$i] }}</span>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Featured & Recent Posts -->
    <section class="space-y-6">
        <div>
            <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Konten Terbaru</p>
            <h2 class="mt-2 text-2xl font-semibold text-slate-900">Daftar Postingan Terkini</h2>
        </div>

        <x-admin.posts-table :posts="$posts" />
    </section>
</div>

{{-- Footer --}}
<x-admin.footer />
@endsection
