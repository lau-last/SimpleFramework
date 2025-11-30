class ThemeColor {
    constructor() {
        ThemeColor.init();
    }

    static init() {
        const dark = window.matchMedia("(prefers-color-scheme: dark)").matches;
        const systemTheme = dark ? 'dark' : 'light';
        const savedTheme = localStorage.getItem('theme') || systemTheme;
        document.documentElement.setAttribute('data-theme', savedTheme);
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
        const dark = window.matchMedia("(prefers-color-scheme: dark)").matches;
        const systemTheme = dark ? 'dark' : 'light';
        document.documentElement.setAttribute('data-theme', systemTheme);
        localStorage.setItem('theme', systemTheme);
    }

}

new ThemeColor();

