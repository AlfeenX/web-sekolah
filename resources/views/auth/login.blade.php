<x-guest-layout>
    <!-- Session Status -->
    
    <div class="flex w-full">
        <div class="relative hidden md:block overflow-hidden bg-primary-container">
            <img alt="Campus Architecture" class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-overlay"
                data-alt="A wide-angle professional architectural photograph of a prestigious university library at dusk."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtkxccpkP98EeARGA3JHxzTIF95ttHj3i7ZgGj2Leh9o_2CiRNEI22-Fuvf52QHmB3-6caCb8mJlPPIThrU7zLknnBwhadRWhRthRX_KrS-vhr5vVw7oy3y4TKN5MvhHCQVK62fOch6NV916PeP_dnP-9oDuQ_SrLbh2-RheoCApCcZpfdBmZq4pdAWLLQHG-mq0CaTDw8EhhftmgR2XfkWimL-MyKaB25nuIKhBotzHevBI2_RXuHJE7iAQI3kwK9tGct6Gi0NAeM" />
            <div class="relative z-10 h-full flex flex-col justify-end p-12 text-white">
                <h2 class="font-h2 text-h2 mb-4">Membentuk Pemimpin Masa Depan Sejak 1954</h2>
                <p class="font-body-lg text-body-lg text-white/80">Akses catatan akademik, materi kursus, dan pembaruan
                    institusional dalam satu portal aman.</p>
            </div>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="p-8 md:p-16 flex flex-col justify-center">
            @csrf
            <div class="mb-10">
                <h1 class="font-h1 text-h1 text-primary mb-2">Selamat Datang Kembali</h1>
                <p class="font-body-md text-body-md text-secondary">Silakan masukkan kredensial institusi Anda untuk
                    melanjutkan.</p>
            </div>
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')"
                    class="block font-label-sm text-label-sm text-on-surface-variant" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Kata Sandi')"
                    class="block font-label-sm text-label-sm text-on-surface-variant" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="flex justify-between items-center">
                    <div class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded text-primary border-outline-variant focus:ring-primary-fixed-dim" name="remember">
                        <span class="ms-2 font-caption text-caption">{{ __('Ingat saya') }}</span>
                    </div>
                    <div class="flex items-center justify-end ">
                        @if (Route::has('password.request'))
                            <a class="underline font-caption text-[12px] hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Lupa kata sandi?') }}
                            </a>
                        @endif
                    </div>
                </label>
            </div>
            <x-primary-button class=" mt-4 w-full justify-center font-medium">
                {{ __('Masuk') }}
            </x-primary-button>
            <div class="mt-10 pt-8 border-t border-slate-100 text-center">
                <p class="font-body-md text-body-md text-secondary">
                    Belum punya akun?
                    <a class="text-primary font-bold hover:underline" href="{{ route('register') }}">Daftar sekarang!</a>
                </p>
            </div>
        </form>
    </div>
</x-guest-layout>
