class ThemeColor {
    constructor() {
        ThemeColor.init();
    }

    static init() {
        ThemeColor.setTheme();
        document.addEventListener("DOMContentLoaded", () => {
            ThemeColor.setThemeIcon();
            ThemeColor.setActiveTheme();
        });
    }

    static onClickTheme() {
        ThemeColor.setThemeIcon();
        ThemeColor.setActiveTheme();
    }

    static setTheme() {
        const theme = localStorage.getItem('theme');
        switch (theme) {
            case 'dark':
                ThemeColor.themeDark();
                break;
            case 'light':
                ThemeColor.themeLight();
                break;
            case 'system':
                ThemeColor.themeSystem();
                break;
            default:
                ThemeColor.themeSystem();
                break;
        }
    }

    static getSystemTheme() {
        return window.matchMedia("(prefers-color-scheme: dark)").matches ? 'dark' : 'light';
    }

    static themeLight() {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    }

    static themeDark() {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }

    static themeSystem() {
        document.documentElement.setAttribute('data-theme', ThemeColor.getSystemTheme());
        localStorage.setItem('theme', 'system');
    }

    static witchTheme() {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark' || savedTheme === 'light' || savedTheme === 'system') return savedTheme;
        return 'system';
    }

    static setThemeIcon() {
        const icons = {light: "☀️", dark: "🌙", system: "💻"};
        const current = ThemeColor.witchTheme();
        const iconEl = document.getElementById("theme-icon");
        iconEl.textContent = icons[current];

    }

    static setActiveTheme() {
        const current = ThemeColor.witchTheme();
        const listItems = document.querySelectorAll("[data-theme]");
        listItems.forEach(item => {
            item.classList.remove("active");
            if (item.dataset.theme === current) {
                item.classList.add("active");
            }
        });
    }

}

new ThemeColor();

