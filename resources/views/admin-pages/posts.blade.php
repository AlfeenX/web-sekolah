@extends('layouts.admin')

@section('content')
@php
@endphp

<div class="p-8 max-w-full mx-auto space-y-8">
    <section class="relative overflow-hidden rounded-[36px] bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 text-white">
        <div class="absolute -left-24 top-6 h-52 w-52 rounded-full bg-cyan-500/20 blur-3xl"></div>
        <div class="absolute -right-16 top-20 h-64 w-64 rounded-full bg-blue-700/20 blur-3xl"></div>
        <div class="grid gap-6 lg:grid-cols-[minmax(0,1fr)_320px] p-8">
            <div class="relative z-10">
                <span class="text-sm uppercase tracking-[0.28em] text-cyan-200/80">Kelola Postingan</span>
                <h1 class="mt-4 text-4xl font-h1 tracking-tight">Dasbor Konten Sekolah</h1>
                <p class="mt-4 max-w-2xl text-base leading-8 text-slate-200/75">Atur postingan penerimaan, pengumuman, artikel, dan berita sekolah dengan user interface yang segar dan mudah dikendalikan.</p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('dashboard.posts.create') }}" class="inline-flex items-center gap-2 rounded-full bg-white/12 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-slate-950/20 ring-1 ring-white/10 transition hover:bg-white/20">
                        <span class="material-symbols-outlined text-base">add_circle</span>
                        Buat Postingan Baru
                    </a>
                    <a href="#" class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-5 py-3 text-sm text-slate-100 transition hover:bg-white/10">
                        <span class="material-symbols-outlined text-base">upload_file</span>
                        Unggah Draft
                    </a>
                </div>
            </div>

            <div class="grid gap-4">
                <div class="rounded-[28px] border border-white/10 bg-white/5 p-6 backdrop-blur-xl">
                    <p class="text-xs uppercase tracking-[0.24em] text-cyan-200/80">Postingan Aktif</p>
                    <div class="mt-4 text-4xl font-semibold">128</div>
                    <p class="mt-2 text-sm text-slate-200/75">Jumlah konten yang sudah dipublikasikan dan tersedia di halaman utama.</p>
                </div>
                <div class="rounded-[28px] border border-white/10 bg-white/5 p-6 backdrop-blur-xl">
                    <p class="text-xs uppercase tracking-[0.24em] text-cyan-200/80">Revisi Minggu Ini</p>
                    <div class="mt-4 text-4xl font-semibold">14</div>
                    <p class="mt-2 text-sm text-slate-200/75">Jumlah postingan dan pembaruan yang sedang diproses minggu ini.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="grid gap-6 lg:grid-cols-[320px_1fr]">
        <aside class="space-y-6 rounded-[32px] border border-slate-200/80 bg-white/90 p-6 shadow-[0_0px_20px_rgba(15,23,42,0.07)] backdrop-blur-xl">
            <div class="space-y-3">
                <p class="text-sm uppercase tracking-[0.26em] text-slate-500">Filter cepat</p>
                <h2 class="text-2xl font-semibold text-slate-900">Kategori dan status</h2>
            </div>
            <div class="grid gap-3">
                <a href="{{ route('dashboard.posts.index') }}" class="block rounded-2xl border {{ !request('status') ? 'border-blue-400 bg-blue-50 text-blue-700' : 'border-slate-200 bg-slate-50 text-slate-700 hover:border-slate-300' }} px-4 py-3 text-left text-sm font-semibold transition">Semua Postingan</a>
                <a href="{{ route('dashboard.posts.index', ['status' => 'published']) }}" class="block rounded-2xl border {{ request('status') == 'published' ? 'border-emerald-400 bg-emerald-50 text-emerald-700' : 'border-slate-200 bg-slate-50 text-slate-700 hover:border-slate-300' }} px-4 py-3 text-left text-sm font-semibold transition">Terbit</a>
                <a href="{{ route('dashboard.posts.index', ['status' => 'draft']) }}" class="block rounded-2xl border {{ request('status') == 'draft' ? 'border-amber-400 bg-amber-50 text-amber-700' : 'border-slate-200 bg-slate-50 text-slate-700 hover:border-slate-300' }} px-4 py-3 text-left text-sm font-semibold transition">Draft</a>
                <a href="{{ route('dashboard.posts.index', ['status' => 'review']) }}" class="block rounded-2xl border {{ request('status') == 'review' ? 'border-purple-400 bg-purple-50 text-purple-700' : 'border-slate-200 bg-slate-50 text-slate-700 hover:border-slate-300' }} px-4 py-3 text-left text-sm font-semibold transition">Review</a>
            </div>
        </aside>

        <div class="space-y-6">
            <div class="rounded-[32px] border border-slate-200 bg-white p-6 shadow-sm">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Manajemen Postingan</p>
                        <h2 class="mt-2 text-3xl font-semibold text-slate-900">Daftar Konten</h2>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                        <div class="relative w-full min-w-[220px]">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                            <input class="w-full rounded-full border border-slate-200 bg-slate-50 py-3 pl-12 pr-4 text-sm text-slate-700 focus:border-slate-400 focus:outline-none focus:ring-2 focus:ring-cyan-100" placeholder="Cari judul, kategori, atau penulis" />
                        </div>
                        <a href="{{ route('dashboard.posts.create') }}" class="inline-flex items-center gap-2 rounded-full bg-blue-950 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-900/10 transition hover:bg-blue-900" >
                            <span class="material-symbols-outlined text-base">add</span>
                            Tambah Baru
                        </a>
                    </div>
                </div>
            </div>

            <x-admin.posts-table :posts="$posts" />
        </div>
    </section>
</div>

{{-- Footer --}}
<x-admin.footer />
@endsection
