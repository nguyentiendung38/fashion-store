document.addEventListener('DOMContentLoaded', function () {
    // --- KHAI BÁO BIẾN ---
    const header = document.getElementById('header');
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    // --- LOGIC CHO MENU MOBILE ---
    const toggleMenu = (forceClose = false) => {
        const isMenuOpen = hamburgerButton.classList.contains('active');
        if (isMenuOpen || forceClose) {
            hamburgerButton.classList.remove('active');
            mobileMenu.classList.add('-translate-y-[110%]', 'opacity-0');
            mobileMenu.classList.remove('translate-y-0', 'opacity-100');
            document.body.style.overflow = '';
        } else {
            hamburgerButton.classList.add('active');
            mobileMenu.classList.remove('-translate-y-[110%]', 'opacity-0');
            mobileMenu.classList.add('translate-y-0', 'opacity-100');
            document.body.style.overflow = 'hidden';
        }
    };

    hamburgerButton.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleMenu();
    });

    mobileNavLinks.forEach(link => {
        link.addEventListener('click', () => toggleMenu(true));
    });

    // --- LOGIC CHO HIỆU ỨNG HEADER KHI CUỘN ---
    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 50) {
            header.querySelector('.absolute').classList.add('bg-white/95', 'shadow-md');
        } else {
            header.querySelector('.absolute').classList.remove('bg-white/95', 'shadow-md');
        }
    });

    // --- LOGIC ĐÁNH DẤU LINK ACTIVE ---
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-link, .mobile-nav-link').forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active-link');
            if (link.classList.contains('nav-link')) {
                link.querySelector('span').classList.add('text-pink-600');
            }
        }
    });
});

// --- LOGIC CUỘN TỚI SECTION (nếu có $scrollToSection) ---
if (window.scrollToSectionId) {
    document.addEventListener('DOMContentLoaded', function () {
        const section = document.getElementById(window.scrollToSectionId);
        if (section) {
            setTimeout(() => {
                section.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 100);
        }
    });
}
