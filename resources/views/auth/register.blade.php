<x-guest-layout>

    <div class="flex w-full">
        <div class="hidden md:flex flex-col justify-between p-lg relative bg-primary text-white overflow-hidden">
            <div class="z-10">
                <h1 class="font-h1 text-white mb-sm">Mulai Perjalanan Akademik Anda</h1>
                <p class="font-body-lg text-primary-fixed opacity-90">Bergabunglah dengan komunitas yang berdedikasi pada
                    keunggulan, inovasi, dan pembelajaran seumur hidup.</p>
            </div>
            <!-- Decorative Grid Element -->
            <div
                class="absolute bottom-0 left-0 w-full h-1/2 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px]">
            </div>
            <div class="z-10 flex flex-col gap-sm">
                <div class="flex items-start gap-md">
                    <div class="w-10 h-10 rounded bg-primary-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary-fixed">verified_user</span>
                    </div>
                    <div>
                        <p class="font-label-sm">Portal Aman</p>
                        <p class="text-caption text-primary-fixed/70">Enkripsi tingkat institusi untuk semua data siswa.
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-md">
                    <div class="w-10 h-10 rounded bg-primary-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary-fixed">school</span>
                    </div>
                    <div>
                        <p class="font-label-sm">Jaringan Alumni Global</p>
                        <p class="text-caption text-primary-fixed/70">Terhubung dengan ribuan lulusan di seluruh dunia.
                        </p>
                    </div>
                </div>
            </div>
            <img alt="" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30"
                data-alt="A grand, neoclassical academy building with tall columns and expansive glass windows reflecting a clear blue sky."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7UgzAQQ5KnJ3Ue-vMehLEz7Dqw613_f7doRUF8CjHzb-FEj3bkEL5ECGhv0JwQfUJ1l39WMt-Fa8z1OI4Fp40pIWLuJLn6V4bsWpSjm3w9UBunZG8GlPFWhuHXg_9VQXlaNy_rpTTElD6jWtqxTGKoD2yRUgXsuinFA3PaCx5g2uD1VEZOIvhsYsJkVubm0YqlZszHAw0FdWVC2nSL0RCAiST__xT7XnEGcI9ZbJpA4_OcQZYWzu0R6FFv_ORrKaEq7leySzEtf3t" />
        </div>

        <div class="p-md md:p-lg bg-white flex flex-col justify-center">
            <div class="mb-sm">
                <h2 class="font-body-md text-h2 text-primary mb-xs">Buat Akun</h2>
                <p class="font-body-md text-secondary">Masukkan detail Anda untuk mendaftar ke portal.</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-md">
                @csrf
                <div class="space-y-xs">
                    <x-input-label for="name" :value="__('Nama Lengkap')"
                        class="block font-label-sm text-on-surface-variant" />
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">person</span>
                        <x-text-input id="name"
                            class="w-full pl-10 pr-4 h-12 border border-outline-variant rounded bg-surface-container-low font-body-md form-focus-ring transition-all"
                            type="name" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <!-- Email Address -->
                <div class="space-y-xs">
                    <x-input-label for="email" :value="__('Alamat Email')"
                        class="block font-label-sm text-on-surface-variant" />
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">mail</span>
                        <x-text-input id="email"
                            class="w-full pl-10 pr-4 h-12 border border-outline-variant rounded bg-surface-container-low font-body-md form-focus-ring transition-all"
                            type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                    </div>
                    <p class="text-caption text-on-tertiary-container mt-1 italic">Gunakan email institusi atau email
                        kontak utama Anda.</p>
                </div>
                <!-- Password Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-md">
                    <!-- Password -->
                    <div class="space-y-xs">
                        <x-input-label for="password" :value="__('Kata Sandi')"
                            class="block font-label-sm text-on-surface-variant" />
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
                            <x-text-input id="password"
                                class="w-full pl-10 pr-4 h-12 border border-outline-variant rounded bg-surface-container-low font-body-md form-focus-ring transition-all"
                                type="password" name="password" :value="old('password')" required autofocus
                                autocomplete="new-password" />
                        </div>
                    </div>
                    <!-- Confirm Password -->
                    <div class="space-y-xs">
                        <x-input-label for="confirm_password" :value="__('Konfirmasi Kata Sandi')"
                            class="block font-label-sm text-on-surface-variant" />
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock_reset</span>
                            <x-text-input id="confirm_password"
                                class="w-full pl-10 pr-4 h-12 border border-outline-variant rounded bg-surface-container-low font-body-md form-focus-ring transition-all"
                                type="password" name="password_confirmation" required autofocus
                                autocomplete="new-password" />
                        </div>
                    </div>
                </div>
                <!-- Validation Hints -->
                <div
                    class="p-sm bg-surface-container rounded border border-outline-variant/20 flex flex-wrap gap-x-md gap-y-1">
                    <div class="flex items-center gap-1 text-on-tertiary-container">
                        <span class="material-symbols-outlined text-[14px]">check_circle</span>
                        <span class="text-caption">8+ Karakter</span>
                    </div>
                    <div class="flex items-center gap-1 text-on-tertiary-container">
                        <span class="material-symbols-outlined text-[14px]">check_circle</span>
                        <span class="text-caption">1 Huruf Besar</span>
                    </div>
                    <div class="flex items-center gap-1 text-on-tertiary-container">
                        <span class="material-symbols-outlined text-[14px]">check_circle</span>
                        <span class="text-caption">1 Angka</span>
                    </div>
                    <div class="flex items-center gap-1 text-on-tertiary-container">
                        <span class="material-symbols-outlined text-[14px]">check_circle</span>
                        <span class="text-caption">1 Karakter Spesial</span>
                    </div>
                </div>
                <!-- Terms Checkbox -->
                <div class="flex items-start gap-2 pt-xs">
                    <input class="mt-1 w-4 h-4 text-primary border-outline-variant rounded focus:ring-primary-fixed-dim"
                        id="terms" required="" type="checkbox" />
                    <label class="text-caption text-secondary" for="terms">
                        Saya setuju dengan <a class="text-primary font-semibold hover:underline"
                            href="#">Ketentuan Layanan</a> dan <a
                            class="text-primary font-semibold hover:underline" href="#">Kebijakan Privasi</a>
                        terkait pengelolaan data akademik.
                    </label>
                </div>
                <div class="flex items-center mt-4">
                    <x-primary-button class=" w-full justify-center font-medium">
                        {{ __('Selesaikan Pendaftaran') }}
                        <span
                            class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </x-primary-button>
                </div>
            </form>

            <div class="mt-lg text-center border-t border-slate-100 pt-6">
                <p class="font-body-md text-secondary">
                    Sudah punya akun?
                    <a class="text-primary font-bold hover:underline" href="{{ route('login') }}">Masuk</a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
