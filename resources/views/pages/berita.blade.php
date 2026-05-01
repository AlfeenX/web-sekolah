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
                        "on-background": "#191c1e",
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
                        "on-error": "#ffffff",
                        "surface": "#f7f9fb",
                        "surface-bright": "#f7f9fb"
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
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- PublicTopNav -->
    <header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 sticky top-0 z-50">
        <div class="flex justify-between items-center h-16 w-full px-8 max-w-[1280px] mx-auto">
            <div class="text-xl font-bold text-primary dark:text-white">SMK Negeri 1 Sukacita</div>
            <nav class="hidden md:flex items-center gap-8 font-public-sans text-sm font-medium tracking-tight">
                <a class="text-slate-600 dark:text-slate-400 hover:text-primary hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">Beranda</a>
                <a class="text-primary dark:text-blue-300 border-b-2 border-primary font-bold pb-1" href="#">Berita</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-primary hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">Penerimaan</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-primary hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">Tentang</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-primary hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">Profil</a>
            </nav>
            <button class="bg-primary text-white px-6 py-2 rounded-xl text-label-sm font-semibold hover:opacity-80 transition-opacity duration-150">
                Daftar Sekarang
            </button>
        </div>
    </header>
    <main class="max-w-[1280px] mx-auto px-8 py-xl">
        <!-- Hero / Headline Section -->
        <div class="mb-lg">
            <h1 class="font-h1 text-h1 text-primary mb-xs">Berita &amp; Pembaruan Sekolah</h1>
            <p class="font-body-lg text-body-lg text-secondary max-w-2xl">Dapatkan informasi terbaru mengenai kegiatan di SMK Negeri 1 Sukacita, mulai dari pencapaian akademik hingga kemenangan olahraga.</p>
        </div>
        <!-- Search and Filter Bar -->
        <div class="bg-white border border-slate-200 p-md rounded-xl shadow-sm mb-lg flex flex-col md:flex-row gap-gutter items-center">
            <div class="relative w-full md:w-1/3">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
                <input class="w-full pl-12 pr-4 h-12 border border-slate-200 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md outline-none transition-all" placeholder="Cari berita dan artikel..." type="text" />
            </div>
            <div class="flex flex-wrap gap-sm items-center">
                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest mr-2">Filter berdasarkan:</span>
                <button class="px-6 py-2 bg-primary text-white rounded-full font-label-sm text-label-sm">Semua Berita</button>
                <button class="px-6 py-2 bg-slate-100 text-secondary hover:bg-secondary-container transition-colors rounded-full font-label-sm text-label-sm">Akademik</button>
                <button class="px-6 py-2 bg-slate-100 text-secondary hover:bg-secondary-container transition-colors rounded-full font-label-sm text-label-sm">Olahraga</button>
                <button class="px-6 py-2 bg-slate-100 text-secondary hover:bg-secondary-container transition-colors rounded-full font-label-sm text-label-sm">Kegiatan</button>
            </div>
        </div>
        <!-- Asymmetric/Bento-ish Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
            <!-- Featured Card -->
            <article class="md:col-span-8 bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                <div class="relative h-[400px] w-full overflow-hidden">
                    <img alt="School Campus" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A professional architectural photograph of a modern high school campus during the golden hour. The brick building is framed by lush green trees and a clear blue sky, casting soft shadows across the manicured lawn. The atmosphere is quiet, dignified, and academically rigorous, using a primary palette of navy blue and warm brick tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3UVKq5LCpYxtAQdlc--clQ6jEMkRL8q-7JE_4UBB20NNubADY79niW7ZuNGznqoKwY93vsLms85LE-vJ7Vcf_qR5aWIAQtSZq06m3R2_8neqIs78hPC6pmV9tt6wsJUfzji4FEBjpxA9HSf9kNRmBl-fthfRzZK4N8UDMqmPxz6hY1DrEUm72zV3ifmJWjFHqx_O4Sbie2Z2RVFK7W2HV3elWox48ndWTqtwAvWX1UqxSkZQfRsmbUYBnVr0fZmfnvOBJOTPoq_tG" />
                    <div class="absolute top-4 left-4 bg-primary text-white px-3 py-1 rounded text-label-sm uppercase tracking-tighter">Akademik</div>
                </div>
                <div class="p-md">
                    <span class="font-caption text-caption text-secondary">24 Oktober 2024</span>
                    <h2 class="font-h2 text-h2 text-primary mt-2 mb-4 group-hover:text-primary-container transition-colors">SMK Negeri 1 Sukacita Meraih Peringkat Teratas di Pameran Sains Regional</h2>
                    <p class="font-body-md text-body-md text-secondary mb-md">Siswa kami kembali menunjukkan bakat dan dedikasi yang luar biasa, dengan meraih juara pertama dalam tiga kategori utama di Expo Sains dan Teknik Tri-State.</p>
                    <a class="inline-flex items-center gap-2 font-label-sm text-label-sm text-primary font-bold hover:underline" href="#">
                        Baca Selengkapnya <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </article>
            <!-- Side Card 1 -->
            <article class="md:col-span-4 bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                <div class="h-48 overflow-hidden">
                    <img alt="Athletics" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A high-action shot of high school athletes competing in a track and field event. The runners are focused and mid-stride, with the background blurred to emphasize speed and competition. The lighting is bright and natural daylight, emphasizing an energetic and spirited mood. The color scheme features high-contrast tones of blue and white track uniforms." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVM1Ok21mwoLFAw6eEFfXNe1StcSCCRp1e3EMHf1OCdp2fbcxLmeeDsLGJ6xKfD8uip3e8w0CKaCIDla1jsBiewaO3ZUje-A-QNo7e-v9qI2R6t_NEZkf4uoZBOwPhnKc8zL9-QMl152sc3m1ruHbcWSsswqkTRYIdM4VzOnFdVpdJX0tb-FFlVX6dsrY5ONltJuq3SyeyNV5CahX_oeRMk272MKnK4_XM3E4YbIWI_Ukh_iGg4GMOl__ULUNCPoKkl381xAAw8SDZ" />
                </div>
                <div class="p-md">
                    <div class="flex justify-between items-start mb-2">
                        <span class="bg-secondary-container text-primary px-2 py-0.5 rounded text-[10px] font-bold uppercase">Olahraga</span>
                        <span class="font-caption text-caption text-secondary">22 Okt</span>
                    </div>
                    <h3 class="font-h3 text-h3 text-primary mb-2 group-hover:text-primary-container">Tim Eagles Merebut Gelar Juara Divisi</h3>
                    <p class="font-body-md text-body-md text-secondary line-clamp-2">Gol di menit-menit terakhir memastikan kemenangan bagi tim sepak bola kami dalam pertandingan kejuaraan yang mendebarkan.</p>
                </div>
            </article>
            <!-- Small Grid Item 1 -->
            <article class="md:col-span-4 bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                <div class="h-48 overflow-hidden">
                    <img alt="Concert" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A serene indoor scene of a school auditorium during a musical performance. Warm spotlights illuminate a wooden stage where students are playing orchestral instruments. The mood is sophisticated and artistic, with a shallow depth of field focusing on a violin in the foreground. The lighting is dramatic and elegant." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJPJMBcX0pfTyeJXKpW_Ce649Pod2hCyFs-42OwS34SOjnebjQ8oFNAo3XMnpSLbMHNHe59A4SupNPE02my132GeDGZGj2gXWMy6blPg2OlTeHbshq27H329xTQQ5jHerGlVH3kbCUN6bS5zbuZ9xLUKgu2TniwDDjTea-wLNlzrUdUzxbW-B0M6ye_mamJbQ2lVLOO1KlNvdOL6v4Gxg0BlKuGrUDFpPY9OV9rsJbb07oTHF8rjLoihyhZTRHiGw1aIhyNWtG0ERx" />
                </div>
                <div class="p-md">
                    <div class="flex justify-between items-start mb-2">
                        <span class="bg-secondary-container text-primary px-2 py-0.5 rounded text-[10px] font-bold uppercase">Kegiatan</span>
                        <span class="font-caption text-caption text-secondary">18 Okt</span>
                    </div>
                    <h3 class="font-h3 text-h3 text-primary mb-2 group-hover:text-primary-container text-lg">Gala Musim Gugur Tahunan</h3>
                    <p class="font-body-md text-body-md text-secondary line-clamp-2">Bergabunglah bersama kami untuk malam penuh musik dan perayaan saat kami menampilkan pertunjukan siswa.</p>
                </div>
            </article>
            <!-- Small Grid Item 2 -->
            <article class="md:col-span-4 bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                <div class="h-48 overflow-hidden">
                    <img alt="Classroom" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A focused student in a modern classroom setting working with a digital tablet and physical notebooks. The lighting is soft and diffused through large windows, creating a peaceful and productive academic atmosphere. The aesthetic is clean and minimalist, highlighting technological integration in a traditional school environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKdiL8rbjer6BcIpAi1Gqv6eVh4DWcbWYWZqgtVoIZnW3M2HzX45RsoZL4BF3ST9XvxFg43zWoK9ugg8Xy4tho7T4V4q60hBbb_mnK3edepGgy6zzHzi_cgFBygX7cIiM37AANz0RxjXvAcdLz9QcCq9CsEX26tkYyiIQp6MbUmje7TsXL-Ub9eMYY6WcWFunc9i_gHYVIGgwh7yDl4RI1SKWEqpGXNVR6rvS4rXzza2KUhHoKCDYd3XUJuFlFjVV_BbxTqVdXL41q" />
                </div>
                <div class="p-md">
                    <div class="flex justify-between items-start mb-2">
                        <span class="bg-secondary-container text-primary px-2 py-0.5 rounded text-[10px] font-bold uppercase">Akademik</span>
                        <span class="font-caption text-caption text-secondary">15 Okt</span>
                    </div>
                    <h3 class="font-h3 text-h3 text-primary mb-2 group-hover:text-primary-container text-lg">Peluncuran Lab Digital Baru</h3>
                    <p class="font-body-md text-body-md text-secondary line-clamp-2">Fasilitas mutakhir kini telah dibuka untuk meningkatkan pembelajaran STEM bagi semua tingkat.</p>
                </div>
            </article>
            <!-- Small Grid Item 3 -->
            <article class="md:col-span-4 bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                <div class="h-48 overflow-hidden">
                    <img alt="Community" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A group of students engaged in a community service project, planting trees in a local park. The scene is bright and outdoor, filled with vibrant greens and natural sunlight. The mood is hopeful and collaborative, showing student leadership and social responsibility. The style is documentary-like and authentic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQI9pPjhMI08EYP86Gjd7x_i-AGHKuGx8xdmXy32z9p7AgXdSy2w4HjBJi7peW7UUpByLdXc6lTt9N8-9Kpoi1wVgrm0DLyffxOcpkTPkAUHmYsLa7rd5FyUBTKfypAsotLQLwdyzbClQ0wpj03wgoaYIeEl39EP2SxA8fB_A6CVsEmF2obPppLn_CrkUmUsuIVOvOcJ4IPzqAfABj-uInAqYOpdJRXIEEKn1InN69YG-ZscfZrHTXnMyVDq_EHzhpWGEi4ljjHJci" />
                </div>
                <div class="p-md">
                    <div class="flex justify-between items-start mb-2">
                        <span class="bg-secondary-container text-primary px-2 py-0.5 rounded text-[10px] font-bold uppercase">Kegiatan</span>
                        <span class="font-caption text-caption text-secondary">12 Okt</span>
                    </div>
                    <h3 class="font-h3 text-h3 text-primary mb-2 group-hover:text-primary-container text-lg">Proyek Keberlanjutan</h3>
                    <p class="font-body-md text-body-md text-secondary line-clamp-2">Siswa berkolaborasi dengan kelompok lokal untuk merestorasi taman pusaka komunitas.</p>
                </div>
            </article>
        </div>
        <!-- Pagination -->
        <div class="mt-lg flex justify-center items-center gap-sm">
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 hover:bg-slate-100 transition-colors">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white font-label-sm">1</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 hover:bg-slate-100 transition-colors font-label-sm">2</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 hover:bg-slate-100 transition-colors font-label-sm">3</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 hover:bg-slate-100 transition-colors">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
        </div>
    </main>
    <!-- PublicFooter -->
    <footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
        <div class="w-full py-12 px-8 flex flex-col md:flex-row justify-between items-center max-w-[1280px] mx-auto">
            <div class="mb-8 md:mb-0">
                <div class="text-lg font-bold text-primary mb-2">SMK Negeri 1 Sukacita</div>
                <p class="font-public-sans text-xs text-slate-500">© 2024 SMK Negeri 1 Sukacita. Hak cipta dilindungi undang-undang.</p>
            </div>
            <nav class="flex flex-wrap justify-center gap-8">
                <a class="font-public-sans text-xs text-slate-500 hover:text-primary underline decoration-primary/30" href="#">Kebijakan Privasi</a>
                <a class="font-public-sans text-xs text-slate-500 hover:text-primary underline decoration-primary/30" href="#">Ketentuan Layanan</a>
                <a class="font-public-sans text-xs text-slate-500 hover:text-primary underline decoration-primary/30" href="#">Hubungi Kami</a>
                <a class="font-public-sans text-xs text-slate-500 hover:text-primary underline decoration-primary/30" href="#">Alumni</a>
            </nav>
        </div>
    </footer>
</body>

</html>