<aside class="fixed left-0 h-full w-64 flex flex-col py-6 gap-2 z-50 border-r border-gray-200 bg-white shadow-lg">
    <div class="px-6 mb-8">
        <h1 class="font-black tracking-widest text-xl text-gray-900">Portal Admin</h1>
        <p class="text-gray-500 text-xs mt-1 uppercase tracking-tighter">Manajemen Institusi</p>
    </div>
    <nav class="flex flex-col gap-1 px-4">
        <a class="bg-gray-100 text-gray-900 rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-200 hover:bg-gray-50 active:scale-[0.98]"
            href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined text-gray-600" data-icon="dashboard">dashboard</span>
            <span class="font-public-sans text-sm">Beranda</span>
        </a>
        <a class="text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-200 active:scale-[0.98]"
            href="{{ route('dashboard.posts') }}">
            <span class="material-symbols-outlined text-gray-600" data-icon="article">article</span>
            <span class="font-public-sans text-sm">Postingan</span>
        </a>
        <a class="text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-200 active:scale-[0.98]"
            href="#">
            <span class="material-symbols-outlined text-gray-600" data-icon="category">category</span>
            <span class="font-public-sans text-sm">Kategori</span>
        </a>
        <a class="text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-200 active:scale-[0.98]"
            href="#">
            <span class="material-symbols-outlined text-gray-600" data-icon="label">label</span>
            <span class="font-public-sans text-sm">Tag</span>
        </a>
        <a class="text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-200 active:scale-[0.98]"
            href="#">
            <span class="material-symbols-outlined text-gray-600" data-icon="group">group</span>
            <span class="font-public-sans text-sm">Pengguna</span>
        </a>
    </nav>
    <div class="relative mt-auto px-2" x-data="{ open: false }">
        <button @click="open = !open"
            class="w-full flex items-center gap-3 p-2 rounded-xl bg-gray-50 transition-colors">
            <div
                class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden border border-gray-300">
                <img alt="Administrator" class="h-full w-full object-cover"
                    src="{{ auth()->user()->profile_photo_url ?? 'https://via.placeholder.com/40' }}" />
            </div>

            <div class="flex flex-col flex-1 text-left">
                <span class="text-gray-900 text-xs font-semibold">
                    {{ auth()->user()->name ?? 'Admin' }}
                </span>

                <span class="text-gray-500 text-[10px]">
                    {{ auth()->user()->role ?? 'Administrator' }}
                </span>
            </div>

            <svg class="w-4 h-4 text-gray-500 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>

        <div x-show="open" x-transition @click.away="open = false"
            class="absolute left-2 right-2 bottom-full mb-2 bg-white rounded-lg shadow-lg border border-gray-200 py-2 z-50">
            <a href="{{ route('profile.edit') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                Profile Settings
            </a>

            <a href="{{ route('dashboard') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                Dashboard
            </a>

            <div class="border-t border-gray-100"></div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                    Logout
                </button>
            </form>
        </div>
    </div>
</aside>
