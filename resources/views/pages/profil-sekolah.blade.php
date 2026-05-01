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
                <a class="text-slate-600 dark:text-slate-400 hover:text-blue-900 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">Penerimaan</a>
                <a class="text-blue-900 dark:text-blue-300 border-b-2 border-blue-900 font-bold pb-1" href="#">Tentang</a>
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
                <img class="absolute inset-0 w-full h-full object-cover" data-alt="A grand, neoclassical academic building with white columns and large arched windows, set against a clear blue sky. The campus grounds are manicured with vibrant green lawns and mature oak trees, casting soft shadows in the morning light." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2GifwjrBfLKcRGx_HwRWqYhTArQ0HHO0WAOkFjqsLUnP6_IdvE0e3VBzvE6_taJUvJ4eDA6jP_9Bk1GQMR5WusiBoCRWY3vDn9b90ZUbJ5rsGZOrRqjtZ3XeQAOZATDKeCC2fsSvU2PAZzqaqkjlZXlgH1iiXOwOVZlh5yZPjS-xYiC4H2zdC-c1Hebr0UeM83npAQnvMmXMDk-wD7lREt81wueI5CwAzAbYa1hVwLeD1IrueYOCg98N0N4djto0TRXd4IvtO7FqT" />
                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
                <div class="relative p-lg max-w-2xl">
                    <span class="text-on-primary bg-secondary/30 backdrop-blur-md px-3 py-1 rounded text-label-sm inline-block mb-4">Berdiri Sejak 1924</span>
                    <h1 class="font-h1 text-h1 text-on-primary mb-4">Keunggulan Institusi &amp; Rigor Akademik</h1>
                    <p class="font-body-lg text-body-lg text-white/80">Menentukan masa depan pendidikan melalui tradisi satu abad dan inovasi yang sistematis.</p>
                </div>
            </div>
        </section>
        <!-- Vision & Mission -->
        <section class="grid grid-cols-1 md:grid-cols-12 gap-gutter mb-xl items-center">
            <div class="md:col-span-5">
                <div class="flex items-center gap-2 text-primary mb-4">
                    <span class="material-symbols-outlined" data-icon="visibility">visibility</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-widest">Fondasi Kami</span>
                </div>
                <h2 class="font-h2 text-h2 text-primary mb-6">Visi &amp; Misi</h2>
                <div class="space-y-8">
                    <div class="p-md bg-white border border-outline-variant rounded-xl shadow-sm">
                        <h3 class="font-h3 text-h3 text-primary mb-3">Visi</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">Menjadi tolok ukur global untuk pendidikan holistik, di mana keingintahuan intelektual bertemu dengan kepemimpinan etis di dunia yang beragam dan terus berubah.</p>
                    </div>
                    <div class="p-md bg-white border border-outline-variant rounded-xl shadow-sm">
                        <h3 class="font-h3 text-h3 text-primary mb-3">Misi</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">SMK Negeri 1 Sukacita memberdayakan siswa untuk mencapai potensi penuh mereka melalui kurikulum akademik yang ketat, kehidupan komunitas yang dinamis, serta komitmen terhadap layanan dan integritas.</p>
                    </div>
                </div>
            </div>
            <div class="md:col-span-7 relative h-[500px]">
                <img class="w-full h-full object-cover rounded-xl shadow-lg" data-alt="A diverse group of university students engaged in a collaborative study session within a modern, sun-drenched library." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD28uPlZnpdsUUtQDQQlmQcKUx0orrVtRMBsMn_7CbYe25hOJxgMF42rDG9OVEVfKiOerIFIdygMmNcclMh6U1MWrSc716lnLvaYPSqn0-QQgKRTfOjCaRQetzhLz49SRrI8c5257-5-9e6KDGJR0V_YqBDIziCzxfrC8EbDFHAYC7ZTMu7r3eQjw5C0eaQ8G0V7hO_qW2FkIz2TbKiO_gZkF0eEx0vLaQ58ZdcY3Y2JydhKbhWbCrzyuPwWiPkrEp4ddq7kWgLWWIe" />
            </div>
        </section>
        <!-- History Section -->
        <section class="mb-xl">
            <div class="flex flex-col items-center mb-lg">
                <h2 class="font-h2 text-h2 text-primary text-center">Satu Abad Sejarah</h2>
                <div class="w-16 h-1 bg-primary mt-4"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="md:col-span-2 md:row-span-2 bg-primary-container p-lg rounded-xl flex flex-col justify-end text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-8 opacity-10">
                        <span class="material-symbols-outlined scale-[8]" data-icon="history">history</span>
                    </div>
                    <span class="font-h1 text-h1 block mb-2">1924</span>
                    <h3 class="font-h3 text-h3 mb-4">Tahun Pendirian</h3>
                    <p class="font-body-md text-white/70">Didirikan sebagai akademi pertama dengan kelas yang hanya terdiri dari 12 siswa, berfokus pada humaniora klasik dan filsafat etika.</p>
                </div>
                <div class="bg-white border border-outline-variant p-md rounded-xl hover:shadow-md transition-all">
                    <span class="font-label-sm text-primary block mb-2">1952</span>
                    <h4 class="font-h3 text-h3 text-primary text-lg mb-1">Ekspansi Kampus</h4>
                    <p class="font-caption text-caption text-on-surface-variant">Pusat lapangan dan Kapel ikonik sekolah selesai dibangun selama fase pertumbuhan pasca-perang ini.</p>
                </div>
                <div class="bg-white border border-outline-variant p-md rounded-xl hover:shadow-md transition-all">
                    <span class="font-label-sm text-primary block mb-2">1988</span>
                    <h4 class="font-h3 text-h3 text-primary text-lg mb-1">Keunggulan Riset</h4>
                    <p class="font-caption text-caption text-on-surface-variant">Pembentukan Institut Ilmu Pengetahuan Lanjutan, menandai transisi kami menjadi institusi berbasis riset.</p>
                </div>
                <div class="md:col-span-2 bg-secondary-container p-md rounded-xl flex items-center gap-6">
                    <div class="flex-1">
                        <span class="font-label-sm text-on-secondary-container block mb-2">2010 - Sekarang</span>
                        <h4 class="font-h3 text-h3 text-on-secondary-container text-lg mb-1">Transformasi Digital</h4>
                        <p class="font-body-md text-on-secondary-container/80 text-sm">Integrasi teknologi cerdas dan program pertukaran global, menghubungkan siswa kami dengan lebih dari 50 sekolah mitra di seluruh dunia.</p>
                    </div>
                    <div class="hidden sm:block w-32 h-32 rounded-lg overflow-hidden shrink-0">
                        <img class="w-full h-full object-cover" data-alt="Close-up of a modern laboratory setting with sleek stainless steel equipment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6yVGOPLTvv9ML8SWZYSZMl7iqoRtJ61fg13PfsLNIP0RKJyc3GVdzgqGX9Zo3sGPECF2MVfYEayAIjUO0tvuek8opYkk_LzTXd0nBZATfCvWjHi7_u-KzAh1iaQ7MDx5Kft0UGj0k3VzK5J5RsGiuT0IfjGPOtVxy_4eYs_zqj5Ka9ASgvRT4JWqIzJwbA321rZaBtBJ-8wVTyPWiZenI840Kt_1Z2Oyqk1czs3tvtF3YPWILyP4_KY4q-zkGEDM8GcsnZuzFzpMB" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Organizational Structure -->
        <section class="bg-surface-container-low rounded-xl p-lg border border-outline-variant">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-lg">
                    <h2 class="font-h2 text-h2 text-primary mb-2">Tata Kelola &amp; Kepemimpinan</h2>
                    <p class="font-body-md text-on-surface-variant">Struktur organisasi sistematis kami memastikan akuntabilitas, transparansi, dan keunggulan akademik di setiap tingkatan.</p>
                </div>
                <div class="space-y-gutter">
                    <!-- Org Level 1 -->
                    <div class="flex flex-col items-center">
                        <div class="bg-primary text-on-primary p-md rounded-lg w-full max-w-sm text-center shadow-lg">
                            <span class="font-label-sm uppercase tracking-tighter opacity-70">Dewan Pengawas</span>
                            <div class="font-h3 text-h3 mt-1">Pengawasan Fondasional</div>
                        </div>
                        <div class="w-px h-8 bg-outline"></div>
                    </div>
                    <!-- Org Level 2 -->
                    <div class="flex flex-col items-center">
                        <div class="bg-white border-2 border-primary p-md rounded-lg w-full max-w-sm text-center">
                            <span class="font-label-sm text-primary uppercase tracking-tighter">Kantor Kepala Sekolah</span>
                            <div class="font-h3 text-h3 text-primary mt-1">Strategi Institusi</div>
                        </div>
                        <div class="w-px h-8 bg-outline"></div>
                    </div>
                    <!-- Org Level 3 -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                        <div class="bg-white border border-outline-variant p-md rounded-lg text-center hover:border-primary transition-colors group">
                            <div class="bg-surface-container-high w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/10">
                                <span class="material-symbols-outlined text-primary" data-icon="school">school</span>
                            </div>
                            <h4 class="font-h3 text-h3 text-lg text-primary">Urusan Akademik</h4>
                            <p class="font-caption text-caption mt-2">Desain kurikulum, pengembangan fakultas, dan penilaian siswa.</p>
                        </div>
                        <div class="bg-white border border-outline-variant p-md rounded-lg text-center hover:border-primary transition-colors group">
                            <div class="bg-surface-container-high w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/10">
                                <span class="material-symbols-outlined text-primary" data-icon="payments">payments</span>
                            </div>
                            <h4 class="font-h3 text-h3 text-lg text-primary">Operasional &amp; Keuangan</h4>
                            <p class="font-caption text-caption mt-2">Pemeliharaan kampus, perencanaan keuangan, dan pertumbuhan institusi.</p>
                        </div>
                        <div class="bg-white border border-outline-variant p-md rounded-lg text-center hover:border-primary transition-colors group">
                            <div class="bg-surface-container-high w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/10">
                                <span class="material-symbols-outlined text-primary" data-icon="diversity_3">diversity_3</span>
                            </div>
                            <h4 class="font-h3 text-h3 text-lg text-primary">Kesejahteraan Siswa</h4>
                            <p class="font-caption text-caption mt-2">Kegiatan ekstrakurikuler, bimbingan karir, dan program kesehatan.</p>
                        </div>
                    </div>
                </div>
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