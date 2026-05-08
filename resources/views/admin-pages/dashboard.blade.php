@extends('layouts.admin')

@section('content')
<div class="p-8 max-w-[1280px] mx-auto space-y-8">
    <!-- Welcome Header -->
    <section class="flex flex-col md:flex-row justify-between items-end gap-4">
        <div>
            <h2 class="font-h2 text-h2 text-primary">Hi, {{ auth()->user()->name ?? 'Admin' }}</h2>
            <p class="font-body-md text-secondary mt-1">Selamat datang di dasbor admin Anda.</p>
        </div>
        <a href="#" class="px-6 h-12 bg-blue-900 text-white font-label-sm rounded-lg flex items-center gap-2 hover:bg-primary-container transition-colors shadow-md">
            <span class="material-symbols-outlined text-sm" data-icon="add_circle">add_circle</span>
            Buat Postingan Baru
        </a>
    </section>

    <!-- Metrics Grid -->
    <x-admin.metrics :metrics="$metrics ?? []" />

    <!-- Bento Layout Content -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <!-- Content Growth Chart -->
        <x-admin.chart :chartData="$chartData ?? []" />

        <!-- Recent Activity Feed -->
        <x-admin.activity-feed :activities="$activities ?? []" />

        <!-- Featured Post Card -->
        <x-admin.featured-post :post="$featuredPost ?? null" />

        <!-- Admin Data Table Section -->
        <x-admin.posts-table :posts="$posts ?? []" />
    </section>
</div>
@endsection
