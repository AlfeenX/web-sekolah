<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "error-container": "#ffdad6",
                        "primary": "#000e27",
                        "outline": "#747780",
                        "on-tertiary-fixed": "#161c22",
                        "secondary": "#4a607a",
                        "on-background": "#191c1e",
                        "inverse-on-surface": "#eff1f3",
                        "tertiary-fixed-dim": "#c1c7cf",
                        "on-tertiary-container": "#868c93",
                        "on-secondary-container": "#4d637c",
                        "error": "#ba1a1a",
                        "on-primary-fixed-variant": "#2c4773",
                        "outline-variant": "#c4c6d0",
                        "tertiary": "#090f15",
                        "secondary-fixed": "#d1e4ff",
                        "on-secondary": "#ffffff",
                        "on-surface-variant": "#44474f",
                        "surface-container-low": "#f2f4f6",
                        "secondary-container": "#c8dffd",
                        "on-primary-container": "#728bbc",
                        "inverse-primary": "#adc7fb",
                        "surface-variant": "#e0e3e5",
                        "primary-container": "#00234e",
                        "on-primary": "#ffffff",
                        "surface-container-high": "#e6e8ea",
                        "primary-fixed-dim": "#adc7fb",
                        "primary-fixed": "#d7e3ff",
                        "tertiary-fixed": "#dde3eb",
                        "on-primary-fixed": "#001b3e",
                        "on-error-container": "#93000a",
                        "surface-tint": "#445f8c",
                        "secondary-fixed-dim": "#b2c8e6",
                        "on-surface": "#191c1e",
                        "on-secondary-fixed": "#031d33",
                        "surface-container": "#eceef0",
                        "tertiary-container": "#1e252b",
                        "on-tertiary-fixed-variant": "#41474e",
                        "surface-dim": "#d8dadc",
                        "on-secondary-fixed-variant": "#324861",
                        "background": "#f7f9fb",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "inverse-surface": "#2d3133",
                        "surface-container-highest": "#e0e3e5",
                        "on-error": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "xl": "80px",
                        "gutter": "24px",
                        "base": "8px",
                        "container-max": "1280px",
                        "lg": "48px",
                        "xs": "4px",
                        "sm": "12px",
                        "md": "24px"
                    },
                    "fontFamily": {
                        "body-md": ["Public Sans"],
                        "h3": ["Public Sans"],
                        "h1": ["Public Sans"],
                        "caption": ["Public Sans"],
                        "label-sm": ["Public Sans"],
                        "h2": ["Public Sans"],
                        "body-lg": ["Public Sans"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {
                            "lineHeight": "1.6",
                            "letterSpacing": "0",
                            "fontWeight": "400"
                        }],
                        "h3": ["24px", {
                            "lineHeight": "1.4",
                            "letterSpacing": "0",
                            "fontWeight": "600"
                        }],
                        "h1": ["40px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "caption": ["12px", {
                            "lineHeight": "1.4",
                            "letterSpacing": "0",
                            "fontWeight": "400"
                        }],
                        "label-sm": ["14px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.02em",
                            "fontWeight": "600"
                        }],
                        "h2": ["32px", {
                            "lineHeight": "1.3",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "letterSpacing": "0",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Public Sans', sans-serif;
            background-color: #f7f9fb;
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- PublicTopNav Component -->
    <nav class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 sticky top-0 z-50">
        <div class="flex justify-between items-center h-16 w-full px-8 max-w-[1280px] mx-auto">
            <div class="text-xl font-bold text-blue-900 dark:text-white">SMK Negeri 1 Sukacita</div>
            <div class="hidden md:flex items-center gap-8 font-public-sans text-sm font-medium tracking-tight">
                <a class="text-slate-600 dark:text-slate-400 hover:text-blue-900 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">Beranda</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-blue-900 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">Berita</a>
                <a class="text-blue-900 dark:text-blue-300 border-b-2 border-blue-900 font-bold pb-1" href="#">Penerimaan</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-blue-900 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">Tentang</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-blue-900 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">Profil</a>
            </div>
            <button class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label-sm hover:opacity-90 transition-opacity">
                Daftar Sekarang
            </button>
        </div>
    </nav>
    <main class="max-w-[1280px] mx-auto px-8 py-xl">
        <!-- Hero Section -->
        <section class="mb-xl">
            <div class="relative rounded-xl overflow-hidden h-[480px] flex items-end">
                <img class="absolute inset-0 w-full h-full object-cover" data-alt="Students walking excitedly into school." src="{{ asset('images/placeholder-ppdb.jpeg') }}" />
                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
                <div class="relative p-lg max-w-2xl">
                    <span class="text-on-primary bg-secondary/30 backdrop-blur-md px-3 py-1 rounded text-label-sm inline-block mb-4">Tahun Ajaran 2024/2025</span>
                    <h1 class="font-h1 text-h1 text-on-primary mb-4">Penerimaan Peserta Didik Baru (PPDB)</h1>
                    <p class="font-body-lg text-body-lg text-white/80">Bergabunglah dengan SMK Negeri 1 Sukacita dan jadilah bagian dari generasi penerus bangsa yang unggul, berprestasi, dan berkarakter.</p>
                </div>
            </div>
        </section>
        
        <!-- Info Section -->
        <section class="grid grid-cols-1 md:grid-cols-12 gap-gutter mb-xl items-start">
            <div class="md:col-span-5">
                <div class="flex items-center gap-2 text-primary mb-4">
                    <span class="material-symbols-outlined" data-icon="app_registration">app_registration</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-widest">Informasi Pendaftaran</span>
                </div>
                <h2 class="font-h2 text-h2 text-primary mb-6">Persyaratan Umum</h2>
                <div class="space-y-4">
                    <div class="p-md bg-white border border-outline-variant rounded-xl shadow-sm flex gap-4">
                        <span class="material-symbols-outlined text-primary" data-icon="check_circle">check_circle</span>
                        <div>
                            <h3 class="font-h3 text-h3 text-primary text-lg mb-1">Usia Maksimal</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">Berusia paling tinggi 21 (dua puluh satu) tahun pada tanggal 1 Juli tahun berjalan.</p>
                        </div>
                    </div>
                    <div class="p-md bg-white border border-outline-variant rounded-xl shadow-sm flex gap-4">
                        <span class="material-symbols-outlined text-primary" data-icon="school">school</span>
                        <div>
                            <h3 class="font-h3 text-h3 text-primary text-lg mb-1">Ijazah SMP/Sederajat</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">Memiliki Ijazah/STTB SMP/MTs/Bentuk Lain yang sederajat.</p>
                        </div>
                    </div>
                    <div class="p-md bg-white border border-outline-variant rounded-xl shadow-sm flex gap-4">
                        <span class="material-symbols-outlined text-primary" data-icon="description">description</span>
                        <div>
                            <h3 class="font-h3 text-h3 text-primary text-lg mb-1">Dokumen Pendukung</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">Mempunyai Kartu Keluarga (KK), Akta Kelahiran, dan dokumen lainnya sesuai jalur pendaftaran.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:col-span-7">
                <div class="bg-surface-container-low rounded-xl p-lg border border-outline-variant">
                    <h3 class="font-h2 text-h2 text-primary mb-6 text-center">Jalur Pendaftaran</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-white border border-outline-variant p-md rounded-lg text-center hover:border-primary transition-colors group">
                            <div class="bg-surface-container-high w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/10">
                                <span class="material-symbols-outlined text-primary" data-icon="map">map</span>
                            </div>
                            <h4 class="font-h3 text-h3 text-lg text-primary">Jalur Zonasi</h4>
                            <p class="font-caption text-caption mt-2">Diperuntukkan bagi calon peserta didik baru yang berdomisili di dalam wilayah zonasi yang ditetapkan Pemerintah Daerah.</p>
                        </div>
                        <div class="bg-white border border-outline-variant p-md rounded-lg text-center hover:border-primary transition-colors group">
                            <div class="bg-surface-container-high w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/10">
                                <span class="material-symbols-outlined text-primary" data-icon="volunteer_activism">volunteer_activism</span>
                            </div>
                            <h4 class="font-h3 text-h3 text-lg text-primary">Jalur Afirmasi</h4>
                            <p class="font-caption text-caption mt-2">Diperuntukkan bagi calon peserta didik baru yang berasal dari keluarga ekonomi tidak mampu dan penyandang disabilitas.</p>
                        </div>
                        <div class="bg-white border border-outline-variant p-md rounded-lg text-center hover:border-primary transition-colors group">
                            <div class="bg-surface-container-high w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/10">
                                <span class="material-symbols-outlined text-primary" data-icon="emoji_events">emoji_events</span>
                            </div>
                            <h4 class="font-h3 text-h3 text-lg text-primary">Jalur Prestasi</h4>
                            <p class="font-caption text-caption mt-2">Berdasarkan nilai rapor dan/atau prestasi perlombaan/penghargaan di bidang akademik maupun non-akademik.</p>
                        </div>
                        <div class="bg-white border border-outline-variant p-md rounded-lg text-center hover:border-primary transition-colors group">
                            <div class="bg-surface-container-high w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/10">
                                <span class="material-symbols-outlined text-primary" data-icon="transfer_within_a_station">transfer_within_a_station</span>
                            </div>
                            <h4 class="font-h3 text-h3 text-lg text-primary">Perpindahan Tugas</h4>
                            <p class="font-caption text-caption mt-2">Diperuntukkan bagi calon peserta didik dari anak guru/tenaga kependidikan atau perpindahan tugas orang tua/wali.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline Section -->
        <section class="mb-xl">
            <div class="flex flex-col items-center mb-lg">
                <h2 class="font-h2 text-h2 text-primary text-center">Jadwal &amp; Alur Pelaksanaan</h2>
                <div class="w-16 h-1 bg-primary mt-4"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="bg-white border border-outline-variant p-md rounded-xl hover:shadow-md transition-all relative">
                    <span class="absolute -top-3 -left-3 bg-primary text-white w-8 h-8 flex items-center justify-center rounded-full font-bold">1</span>
                    <span class="font-label-sm text-primary block mb-2">10 - 20 Juni 2024</span>
                    <h4 class="font-h3 text-h3 text-primary text-lg mb-1">Pendaftaran Online</h4>
                    <p class="font-caption text-caption text-on-surface-variant">Pengisian formulir pendaftaran secara daring melalui portal resmi PPDB daerah dan mengunggah dokumen persyaratan.</p>
                </div>
                <div class="bg-white border border-outline-variant p-md rounded-xl hover:shadow-md transition-all relative">
                    <span class="absolute -top-3 -left-3 bg-primary text-white w-8 h-8 flex items-center justify-center rounded-full font-bold">2</span>
                    <span class="font-label-sm text-primary block mb-2">21 - 25 Juni 2024</span>
                    <h4 class="font-h3 text-h3 text-primary text-lg mb-1">Verifikasi Berkas</h4>
                    <p class="font-caption text-caption text-on-surface-variant">Panitia PPDB akan melakukan verifikasi dan validasi terhadap berkas yang telah diunggah oleh calon siswa.</p>
                </div>
                <div class="bg-white border border-outline-variant p-md rounded-xl hover:shadow-md transition-all relative">
                    <span class="absolute -top-3 -left-3 bg-primary text-white w-8 h-8 flex items-center justify-center rounded-full font-bold">3</span>
                    <span class="font-label-sm text-primary block mb-2">28 Juni 2024</span>
                    <h4 class="font-h3 text-h3 text-primary text-lg mb-1">Pengumuman Hasil</h4>
                    <p class="font-caption text-caption text-on-surface-variant">Pengumuman hasil seleksi PPDB dapat dilihat melalui portal resmi atau papan pengumuman di sekolah.</p>
                </div>
                <div class="bg-white border border-outline-variant p-md rounded-xl hover:shadow-md transition-all relative">
                    <span class="absolute -top-3 -left-3 bg-primary text-white w-8 h-8 flex items-center justify-center rounded-full font-bold">4</span>
                    <span class="font-label-sm text-primary block mb-2">1 - 3 Juli 2024</span>
                    <h4 class="font-h3 text-h3 text-primary text-lg mb-1">Daftar Ulang</h4>
                    <p class="font-caption text-caption text-on-surface-variant">Calon peserta didik yang dinyatakan lulus wajib melakukan daftar ulang dengan menyerahkan berkas fisik ke sekolah.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-primary-container rounded-xl p-lg flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-white md:max-w-xl">
                <h2 class="font-h2 text-h2 mb-2">Siap untuk Bergabung?</h2>
                <p class="font-body-md text-white/80">Jangan lewatkan kesempatan untuk mendapatkan pendidikan vokasi terbaik. Siapkan dokumen Anda dan daftar sekarang juga.</p>
            </div>
            <div class="flex gap-4">
                <button class="bg-white text-primary px-8 py-3 rounded-lg font-label-sm hover:bg-slate-100 transition-colors">
                    Mulai Pendaftaran
                </button>
                <button class="border border-white text-white px-8 py-3 rounded-lg font-label-sm hover:bg-white/10 transition-colors">
                    Unduh Panduan
                </button>
            </div>
        </section>
    </main>
    <!-- PublicFooter Component -->
    <footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
        <div class="w-full py-12 px-8 flex flex-col md:flex-row justify-between items-center max-w-[1280px] mx-auto">
            <div class="flex flex-col items-center md:items-start mb-8 md:mb-0">
                <div class="text-lg font-bold text-blue-900 mb-2">SMK Negeri 1 Sukacita</div>
                <p class="font-public-sans text-xs text-slate-500">© 2024 SMK Negeri 1 Sukacita. Seluruh hak cipta dilindungi.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-8 font-public-sans text-xs text-slate-500">
                <a class="text-slate-500 hover:text-blue-700 underline decoration-blue-900/30" href="#">Kebijakan Privasi</a>
                <a class="text-slate-500 hover:text-blue-700 underline decoration-blue-900/30" href="#">Syarat Layanan</a>
                <a class="text-slate-500 hover:text-blue-700 underline decoration-blue-900/30" href="#">Hubungi Kami</a>
                <a class="text-slate-500 hover:text-blue-700 underline decoration-blue-900/30" href="#">Alumni</a>
            </div>
            <div class="flex gap-4 mt-8 md:mt-0">
                <span class="material-symbols-outlined text-slate-400 hover:text-blue-900 cursor-pointer transition-colors" data-icon="public">public</span>
                <span class="material-symbols-outlined text-slate-400 hover:text-blue-900 cursor-pointer transition-colors" data-icon="mail">mail</span>
                <span class="material-symbols-outlined text-slate-400 hover:text-blue-900 cursor-pointer transition-colors" data-icon="location_on">location_on</span>
            </div>
        </div>
    </footer>
</body>

</html>
