import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                "error-container": "#ffdad6",
                primary: "#000e27",
                outline: "#747780",
                "on-tertiary-fixed": "#161c22",
                secondary: "#4a607a",
                "on-background": "#191c1e",
                "inverse-on-surface": "#eff1f3",
                "tertiary-fixed-dim": "#c1c7cf",
                "on-tertiary-container": "#868c93",
                "on-secondary-container": "#4d637c",
                error: "#ba1a1a",
                "on-primary-fixed-variant": "#2c4773",
                "outline-variant": "#c4c6d0",
                tertiary: "#090f15",
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
                background: "#f7f9fb",
                "surface-container-lowest": "#ffffff",
                "on-tertiary": "#ffffff",
                "inverse-surface": "#2d3133",
                "surface-container-highest": "#e0e3e5",
                "on-error": "#ffffff",
                surface: "#f7f9fb",
                "surface-bright": "#f7f9fb",
            },
            borderRadius: {
                DEFAULT: "0.125rem",
                lg: "0.25rem",
                xl: "0.5rem",
                full: "0.75rem",
            },
            spacing: {
                xl: "80px",
                gutter: "24px",
                base: "8px",
                "container-max": "1280px",
                lg: "48px",
                xs: "4px",
                sm: "12px",
                md: "24px",
            },
            fontFamily: {
                "body-md": ["Public Sans"],
                h3: ["Public Sans"],
                h1: ["Public Sans"],
                caption: ["Public Sans"],
                "label-sm": ["Public Sans"],
                h2: ["Public Sans"],
                "body-lg": ["Public Sans"],
            },
            fontSize: {
                "body-md": [
                    "16px",
                    {
                        lineHeight: "1.6",
                        letterSpacing: "0",
                        fontWeight: "400",
                    },
                ],
                h3: [
                    "24px",
                    {
                        lineHeight: "1.4",
                        letterSpacing: "0",
                        fontWeight: "600",
                    },
                ],
                h1: [
                    "40px",
                    {
                        lineHeight: "1.2",
                        letterSpacing: "-0.02em",
                        fontWeight: "700",
                    },
                ],
                caption: [
                    "12px",
                    {
                        lineHeight: "1.4",
                        letterSpacing: "0",
                        fontWeight: "400",
                    },
                ],
                "label-sm": [
                    "14px",
                    {
                        lineHeight: "1",
                        letterSpacing: "0.02em",
                        fontWeight: "600",
                    },
                ],
                h2: [
                    "32px",
                    {
                        lineHeight: "1.3",
                        letterSpacing: "-0.01em",
                        fontWeight: "600",
                    },
                ],
                "body-lg": [
                    "18px",
                    {
                        lineHeight: "1.6",
                        letterSpacing: "0",
                        fontWeight: "400",
                    },
                ],
            },
        },
    },

    plugins: [forms],
};
