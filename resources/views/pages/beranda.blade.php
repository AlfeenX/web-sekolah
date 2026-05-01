<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SMK Negeri 1 Sukacita | Keunggulan dalam Pendidikan</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Public Sans', sans-serif;
            background-color: #f7f9fb;
        }

        #navbar.scrolled {
            background-color: white;
            color: var(--color-primary, #000e27);
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="text-on-surface">
    <!-- PublicTopNav Component -->
    <header class="bg-transparent text-white fixed inset-x-0 top-0 z-50 transition-all duration-300" id="navbar">
        <div class="flex justify-between items-center h-16 w-full px-8 max-w-[1280px] mx-auto">
            <div class="text-xl font-bold">SMK Negeri 1 Sukacita</div>
            <nav class="hidden md:flex gap-8 items-center">
                <a class="font-public-sans opacity-70 hover:opacity-100 transition-all"
                    href="{{ route('beranda') }}">Beranda</a>
                <a class="font-public-sans opacity-70 hover:opacity-100 transition-all"
                    href="{{ route('berita') }}">Berita</a>
                <a class="font-public-sans opacity-70 hover:opacity-100 transition-all"
                    href="{{ route('ppdb') }}">Penerimaan</a>
                <a class="font-public-sans opacity-70 hover:opacity-100 transition-all"
                    href="{{ route('tentang') }}">Tentang</a>
                <a class="font-public-sans opacity-70 hover:opacity-100 transition-all"
                    href="{{ route('profil-sekolah') }}">Profil</a>
            </nav>
            <div class="flex justify-center items-center gap-4">
                <i class="fa-brands fa-facebook fa-lg"></i>
                <i class="fa-brands fa-whatsapp fa-lg"></i>
                <i class="fa-brands fa-instagram fa-lg"></i>
            </div>
        </div>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center overflow-hidden bg-primary-container">
            <div class="absolute inset-0 opacity-40">
                <img alt="Academy Campus" class="w-full h-full object-cover"
                    data-alt="A wide-angle cinematic shot of a prestigious historic academy campus during the golden hour. The brick architecture is bathed in warm sunlight, surrounded by perfectly manicured green lawns and ancient oak trees. The atmosphere is quiet and intellectually inspiring, reflecting a light-mode aesthetic with deep navy shadows and bright, airy skies."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYA70OwnXGkbgsAeq94UWRbLQ_udwxH5z0F9m97oIYCIYLVkGLwT5tdPlaTQir0pxUBxFbGrqY9CD2hQArar-9XJtZ2Cq0-Pz17A4reXB5vEGUCG3pqJsOJW_VqDVDGwLqee2ufB9Kl7N7X0C2NiCMRt0JrnbnmlxiAJKKTufSEBtYyA4oG9_9iroPXslrXgZ8CT8fsZ_Sr7TN9yeUiD0fyMTiv2Ls_rPjLBdP1OcqYmVMCJWOJYLkfK8Q_xPWWBDfzswmsZHstt3Q" />
            </div>
            <div class="relative max-w-[1280px] mx-auto px-8 w-full">
                <div class="max-w-2xl text-white">
                    <span
                        class="inline-block py-1 px-3 bg-secondary-container text-on-secondary-container font-label-sm rounded-full mb-6 uppercase tracking-wider">Est.
                        1954</span>
                    <h1 class="font-h1 text-h1 mb-6 leading-tight">Tradisi. Inovasi. Ketegasan Akademik.</h1>
                    <p class="font-body-lg text-body-lg mb-8 text-primary-fixed opacity-90">Di SMK Negeri 1 Sukacita,
                        kami membina pemimpin masa depan melalui kurikulum yang menyeimbangkan kearifan klasik dengan
                        penyelidikan teknologi mutakhir.</p>
                    <div class="flex flex-wrap gap-4">
                        <button
                            class="h-[48px] px-8 bg-white text-primary font-label-sm rounded-lg hover:bg-surface-container-high transition-colors">Jelajahi
                            Program</button>
                        <button
                            class="h-[48px] px-8 border-2 border-white text-white font-label-sm rounded-lg hover:bg-white/10 transition-colors">Tur
                            Virtual</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Stats Section -->
        <section class="py-xl bg-surface-container-low border-b border-outline-variant/30">
            <div class="max-w-[1280px] mx-auto px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
                    <div class="text-center p-md bg-white border border-outline-variant rounded-lg shadow-sm">
                        <span class="material-symbols-outlined text-4xl text-primary mb-2">group</span>
                        <div class="text-h2 font-h2 text-primary">1,250+</div>
                        <p class="text-caption font-caption text-secondary uppercase tracking-widest">Siswa Aktif</p>
                    </div>
                    <div class="text-center p-md bg-white border border-outline-variant rounded-lg shadow-sm">
                        <span class="material-symbols-outlined text-4xl text-primary mb-2">school</span>
                        <div class="text-h2 font-h2 text-primary">95%</div>
                        <p class="text-caption font-caption text-secondary uppercase tracking-widest">Penempatan
                            Industri</p>
                    </div>
                    <div class="text-center p-md bg-white border border-outline-variant rounded-lg shadow-sm">
                        <span class="material-symbols-outlined text-4xl text-primary mb-2">workspace_premium</span>
                        <div class="text-h2 font-h2 text-primary">42</div>
                        <p class="text-caption font-caption text-secondary uppercase tracking-widest">Penghargaan
                            Nasional</p>
                    </div>
                    <div class="text-center p-md bg-white border border-outline-variant rounded-lg shadow-sm">
                        <span class="material-symbols-outlined text-4xl text-primary mb-2">psychology</span>
                        <div class="text-h2 font-h2 text-primary">15:1</div>
                        <p class="text-caption font-caption text-secondary uppercase tracking-widest">Rasio Guru-Siswa
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Bento Grid -->
        <section class="py-xl bg-white">
            <div class="max-w-[1280px] mx-auto px-8">
                <div class="flex justify-between items-end mb-12">
                    <div>
                        <h2 class="font-h2 text-h2 text-primary">Berita Sekolah</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Update terbaru dari komunitas
                            sekolah kami.</p>
                    </div>
                    <button class="text-primary font-label-sm flex items-center gap-2 hover:underline">
                        Lihat Semua Berita <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- News Card 1 -->
                    <div
                        class="group bg-white border border-slate-200 rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300">
                        <div class="aspect-video overflow-hidden">
                            <img alt="Tim Robotik"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuARAzy6Rc1lZB-J5dFbrJ8l924vh8m1WJe-bG4-8jWo3CslbwViYDAJve3e80dccAeOfa6mPME7MtrE93GrX_TuJPimVtWuHk3tqIXoRFRcWbDCR1viUUDuiHs5kT_GcYQxR0nd_XjvoqcHzrCe7jIMVDRAWgGRH0RgAg6XN1Z_pf4FMH8BC8sDROD4BLz3RFGeeGk27jrpIY01aTH6n8Dl0C1uc1l-KTqX7c95sNWwI4H4HCpFBUWzsbaaluzmMi4uyr4AGZHwVMMy" />
                        </div>
                        <div class="p-6">
                            <span
                                class="text-label-sm font-label-sm text-primary uppercase tracking-widest mb-2 block">Akademik</span>
                            <h3
                                class="text-h3 font-h3 text-primary mb-3 group-hover:text-surface-tint transition-colors">
                                Kemenangan National Science Bowl</h3>
                            <p class="text-body-md font-body-md text-on-surface-variant mb-4">Tim robotik tingkat akhir
                                kami meraih juara pertama di Final Regional, melaju ke kompetisi nasional.</p>
                            <a class="text-primary font-label-sm inline-flex items-center gap-1 group/link"
                                href="#">Baca Selengkapnya <span
                                    class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">chevron_right</span></a>
                        </div>
                    </div>
                    <!-- News Card 2 -->
                    <div
                        class="group bg-white border border-slate-200 rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300">
                        <div class="aspect-video overflow-hidden">
                            <img alt="Renovasi Perpustakaan"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpcdORoZ5YaCloV6Ac-SFn3Sw3jz_7LIF4eYkwIUNockYJlbFv6ORNqrxmHZmXjyMMy_ERBUFLxh2ZIdtEHp45toUVvXtKjVWOzu8bP36Feb0eqQzFEN4Xk1_noeP4YyZTrMlcwtEU2lJfdw76BmKEn53nYTxIccqw1xq1dtg0YPutBZSM-iFcJ4FxaxuKBXRtp-f8iHRk8OeBSpHwKqYsf5T9FWz4cOXjJDTK3lbIyhVBz6AV4l_rCPRgHcHmZzaceM94Qph9HTj0" />
                        </div>
                        <div class="p-6">
                            <span
                                class="text-label-sm font-label-sm text-primary uppercase tracking-widest mb-2 block">Kehidupan
                                Kampus</span>
                            <h3
                                class="text-h3 font-h3 text-primary mb-3 group-hover:text-surface-tint transition-colors">
                                Gedung Humaniora Baru Dibuka</h3>
                            <p class="text-body-md font-body-md text-on-surface-variant mb-4">Setelah dua tahun
                                perencanaan yang teliti, gedung Humaniora baru kami kini mulai menyambut siswa.</p>
                            <a class="text-primary font-label-sm inline-flex items-center gap-1 group/link"
                                href="#">Baca Selengkapnya <span
                                    class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">chevron_right</span></a>
                        </div>
                    </div>
                    <!-- News Card 3 -->
                    <div
                        class="group bg-white border border-slate-200 rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300">
                        <div class="aspect-video overflow-hidden">
                            <img alt="Acara Komunitas"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8IkSxeW5wzst-Pki2f7MesRu8GjDQyWb7nbdw0ebvjbBdkXCfJBjxVi50Krh0CENj7V9DuMmM9pcW3DHQGjTxQF5H8_YjGp1PW-DG1yYATr2pm7-2ZONaL17O4rv7i1oD9fHOhhHj1I9fqq0x9Ig3zZ6WR9z6T99aRSh-78AXCMBjqpgsDSOqccZ18hxQQ88IQ5bJfBgj97ZnnLH60j2Ni6L7_PFqsTE6rC2IsQZP8W8Evyi6GqPSafbbuKgujPh7vV1sK7yT8y30" />
                        </div>
                        <div class="p-6">
                            <span
                                class="text-label-sm font-label-sm text-primary uppercase tracking-widest mb-2 block">Acara</span>
                            <h3
                                class="text-h3 font-h3 text-primary mb-3 group-hover:text-surface-tint transition-colors">
                                Gala Tahunan Hari Pendiri</h3>
                            <p class="text-body-md font-body-md text-on-surface-variant mb-4">Bergabunglah dalam malam
                                perayaan dan filantropi saat kami menghormati warisan pendiri kami.</p>
                            <a class="text-primary font-label-sm inline-flex items-center gap-1 group/link"
                                href="#">Baca Selengkapnya <span
                                    class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">chevron_right</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Admissions CTA Section -->
        <section class="py-xl">
            <div class="max-w-[1280px] mx-auto px-8">
                <div class="bg-primary rounded-lg overflow-hidden relative shadow-2xl">
                    <div
                        class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-white to-transparent">
                    </div>
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="p-lg md:p-xl md:w-3/5 z-10">
                            <h2 class="text-white font-h1 text-h1 mb-6">Mulai Perjalanan Anda Bersama Kami</h2>
                            <p class="text-primary-fixed font-body-lg text-body-lg mb-8 opacity-80">Penerimaan siswa
                                baru tahun akademik 2024-2025 telah dibuka. Temukan komunitas di mana potensi Anda
                                menjadi prioritas kami.</p>
                            <div class="flex flex-wrap gap-4">
                                <button
                                    class="h-[48px] px-8 bg-white text-primary font-label-sm rounded-lg hover:bg-surface-container-high transition-colors">Mulai
                                    Pendaftaran</button>
                                <button
                                    class="h-[48px] px-8 border border-white/30 text-white font-label-sm rounded-lg hover:bg-white/10 transition-colors">Formulir
                                    Pertanyaan</button>
                            </div>
                        </div>
                        <div class="hidden md:block md:w-2/5 h-full relative min-h-[400px]">
                            <img alt="Siswa" class="absolute inset-0 w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMjAggxn_L_Ck0dhKE3PmMHdv8cC0wqxxmn0TxZL0ic6voMHxQLiLKuZRzDcUP42TQZ4yHqrKXQKo9e9oOtcEfUn4IqVyIA8txggC1X2DLWmW7fk1OUWkaGcbouMUPV1Ovk1YjLiwWMZv-OV6NzlUNDwBejet9Q0KzbZxdRukOZEsEDiACduJ6INVPEQVf2vr52TpDx6NTUVtMdtHo5aAfqGT0LHSOEWPC7FrQJiYIJwDdHWrzNRo5vRFW6fakhTnrljh0AlE3MGRi" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- PublicFooter Component -->
    <footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
        <div
            class="w-full pt-12 pb-6 px-8 flex flex-col md:flex-row justify-between items-start max-w-[1280px] mx-auto gap-12">
            <div class="flex-1">
                <div class="text-lg font-bold text-tertiary-fixed mb-4">SMK Negeri 1 Sukacita</div>
                <p class="font-public-sans text-xs text-slate-500 mb-6">© 2024 SMK Negeri 1 Sukacita. Hak cipta
                    dilindungi undang-undang.</p>
                <div class="flex gap-4">
                    <a class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-primary transition-colors"
                        href="#">
                        <span class="material-symbols-outlined text-sm">social_leaderboard</span>
                    </a>
                    <a class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-primary transition-colors"
                        href="#">
                        <span class="material-symbols-outlined text-sm">public</span>
                    </a>
                    <a class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-primary transition-colors"
                        href="#">
                        <span class="material-symbols-outlined text-sm">mail</span>
                    </a>
                </div>
            </div>
            <div class="flex-1 w-full">
                <h4 class="font-label-sm text-tertiary-fixed uppercase tracking-widest mb-4">Tautan Penting</h4>
                <nav class="flex flex-col gap-3">
                    <a class="font-public-sans text-sm text-slate-600 hover:text-blue-700" href="#">Kebijakan
                        Privasi</a>
                    <a class="font-public-sans text-sm text-slate-600 hover:text-blue-700" href="#">Ketentuan
                        Layanan</a>
                    <a class="font-public-sans text-sm text-slate-600 hover:text-blue-700" href="#">Hubungi
                        Kami</a>
                    <a class="font-public-sans text-sm text-slate-600 hover:text-blue-700" href="#">Alumni</a>
                </nav>
            </div>
            <div class="flex-[1.5] w-full">
                <h4 class="font-label-sm text-tertiary-fixed uppercase tracking-widest mb-4">Lokasi Kami</h4>
                <div
                    class="w-full aspect-[2/1] rounded-lg bg-surface-container-high border border-outline-variant relative overflow-hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-slate-200 animate-pulse"></div>
                    <div class="relative z-10 text-center p-4">
                        <span class="material-symbols-outlined text-4xl text-slate-400 mb-2">map</span>
                        <p class="text-caption text-slate-600">SMK Negeri 1 Sukacita<br />Jl. Pendidikan No. 123,
                            Sukacita</p>
                    </div>
                    <!-- Placeholder for actual Google Maps iframe -->
                    <div class="absolute inset-0 bg-[#e5e7eb] flex items-center justify-center">
                        <img alt="Map Placeholder" class="w-full h-full object-cover opacity-50 grayscale"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDj41CwRNnm7ciqZuBT99vsmGiEdgOBmcuGWRCudjj1bJY3ZmDz3sFCxXIslK_9y9_7RG4MGYBRsvH4RxUmEVZtjVAO0TRMxuu7tvXlL4vUR3EXDJ8gGvC4tIaAoYqxNMT68oOv_cgFVpl0glp0_Nh12A6PTrYEYFeRWfgR4fxmq-2Z0O5n2lPZqxo6s1BWHR0cUJt2AB7RK5iXYtrpQc1i3kkrZ5Df0nLyPZyCe7YTxg7aJdrUf7V0r5Ps_XUITr3h3RdwZpIfM-n5" />
                        <div class="absolute inset-0 flex items-center justify-center bg-white/40">
                            <span class="bg-white px-4 py-2 rounded shadow-sm font-label-sm text-primary">LIHAT
                                PETA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        });
    </script>
</body>

</html>
