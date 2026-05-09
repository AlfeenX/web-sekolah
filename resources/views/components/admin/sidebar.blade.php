<aside class="h-full w-64 flex flex-col py-6 gap-2 border border-slate-200/50 bg-white rounded-[24px] shadow-sm">
    <div class="px-6 mb-4">
        <div class="flex items-center gap-2 mb-2">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center">
                <img src="{{ asset('images/logo-wo-name.png') }}" alt="Logo SMK Cakrawala" class="h-full w-full object-cover"/>
            </div>
            <div>
                <h1 class="font-bold text-lg text-gray-900">Admin</h1>
                <p class="text-gray-500 text-[10px] leading-none">Portal Kontrol</p>
            </div>
        </div>
    </div>
    
    <nav class="flex flex-col gap-1 px-4 flex-1">
        <a class="{{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-900' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }} rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-200 hover:bg-blue-100 active:scale-[0.98]"
            href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined {{ request()->routeIs('dashboard') ? 'text-blue-900' : 'text-gray-600' }}" data-icon="dashboard">dashboard</span>
            <span class="font-public-sans text-sm font-medium">Beranda</span>
        </a>
        <a class="{{ request()->routeIs('dashboard.posts.index') ? 'bg-blue-50 text-blue-900' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }}   rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-200 active:scale-[0.98]"
            href="{{ route('dashboard.posts.index') }}">
            <span class="material-symbols-outlined {{ request()->routeIs('dashboard.posts.index') ? 'text-blue-900' : 'text-gray-600' }}" data-icon="article">article</span>
            <span class="font-public-sans text-sm font-medium">Postingan</span>
        </a>
        <a class="{{ request()->routeIs('dashboard.categories') ? 'bg-blue-50 text-blue-900' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }} rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-200 active:scale-[0.98]"
            href="{{ route('dashboard.categories') }}">
            <span class="material-symbols-outlined {{ request()->routeIs('dashboard.categories') ? 'text-blue-900' : 'text-gray-600' }}" data-icon="category">category</span>
            <span class="font-public-sans text-sm font-medium">Kategori</span>
        </a>
        <a class="{{ request()->routeIs('dashboard.tags') ? 'bg-blue-50 text-blue-900' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }} rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-200 active:scale-[0.98]"
            href="{{ route('dashboard.tags') }}">
            <span class="material-symbols-outlined {{ request()->routeIs('dashboard.tags') ? 'text-blue-900' : 'text-gray-600' }}" data-icon="label">label</span>
            <span class="font-public-sans text-sm font-medium">Tag</span>
        </a>
        <a class="{{ request()->routeIs('dashboard.users') ? 'bg-blue-50 text-blue-900' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }} rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-200 active:scale-[0.98]"
            href="{{ route('dashboard.users') }}">
            <span class="material-symbols-outlined {{ request()->routeIs('dashboard.users') ? 'text-blue-900' : 'text-gray-600' }}" data-icon="group">group</span>
            <span class="font-public-sans text-sm font-medium">Pengguna</span>
        </a>
    </nav>

    <div class="px-4 border-t border-slate-100 pt-4">
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                class="w-full flex items-center gap-3 p-2 rounded-xl hover:bg-gray-50 transition-colors">
                <div
                    class="h-10 w-10 rounded-full bg-gradient-to-br from-blue-400 to-cyan-400 flex items-center justify-center overflow-hidden border border-gray-300 flex-shrink-0">
                    <img alt="Administrator" class="h-full w-full object-cover"
                        src="{{ auth()->user()->profile_photo_url ?? 'https://via.placeholder.com/40' }}" />
                </div>

                <div class="flex flex-col flex-1 text-left min-w-0">
                    <span class="text-gray-900 text-xs font-semibold truncate">
                        {{ auth()->user()->name ?? 'Admin' }}
                    </span>

                    <span class="text-gray-500 text-[10px] truncate">
                        {{ auth()->user()->role ?? 'Administrator' }}
                    </span>
                </div>

                <svg class="w-4 h-4 text-gray-500 transition-transform flex-shrink-0" :class="{ 'rotate-180': open }" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <div x-show="open" x-cloak x-transition @click.away="open = false"
                class="absolute left-0 right-0 bottom-full mb-2 bg-white rounded-2xl shadow-xl border border-gray-200 py-2 z-50">
                <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                    <span class="material-symbols-outlined text-base mr-2">person</span>
                    Profile Settings
                </a>

                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                    <span class="material-symbols-outlined text-base mr-2">dashboard</span>
                    Dashboard
                </a>

                <div class="border-t border-gray-100"></div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="w-full flex items-center text-left px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                        <span class="material-symbols-outlined text-base mr-2">logout</span>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>
