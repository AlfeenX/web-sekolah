<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'Portal Admin SMK Negeri 1 Sukacita')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
                        "body-md": ["16px", { "lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400" }],
                        "h3": ["24px", { "lineHeight": "1.4", "letterSpacing": "0", "fontWeight": "600" }],
                        "h1": ["40px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "caption": ["12px", { "lineHeight": "1.4", "letterSpacing": "0", "fontWeight": "400" }],
                        "label-sm": ["14px", { "lineHeight": "1", "letterSpacing": "0.02em", "fontWeight": "600" }],
                        "h2": ["32px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        body { background-color: #f7f9fb; }
    </style>
    @stack('styles')
</head>
<body class="font-body-md text-on-surface">
    <x-admin.sidebar />
    <main class="pl-64 min-h-screen">
        <x-admin.header />
        @yield('content')
        <x-admin.footer />
    </main>
    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>