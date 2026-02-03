// Check for saved theme preference, otherwise use system preference
const getPreferredTheme = () => {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        return savedTheme;
    }
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
};

// Apply theme
const setTheme = (theme) => {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem('theme', theme);
    updateToggleIcon(theme);
};

// Update Toggle Icon
const updateToggleIcon = (theme) => {
    const icon = document.getElementById('theme-toggle-icon');
    if (icon) {
        if (theme === 'dark') {
            icon.classList.remove('glyphicon-moon');
            icon.classList.add('glyphicon-sun');
        } else {
            icon.classList.remove('glyphicon-sun');
            icon.classList.add('glyphicon-moon');
        }
    }
};

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    setTheme(getPreferredTheme());

    const toggleBtn = document.getElementById('theme-toggle');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const currentTheme = document.documentElement.getAttribute('data-theme');
            setTheme(currentTheme === 'dark' ? 'light' : 'dark');
        });
    }
});
