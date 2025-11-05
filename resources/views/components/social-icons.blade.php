<div class="fixed bottom-6 right-6 z-50">
    <div id="contact-fab-container" class="relative flex flex-col items-center">
        <div id="fab-menu" class="flex flex-col items-center space-y-3 mb-3 transition-all duration-300 ease-in-out transform opacity-0 -translate-y-4 pointer-events-none">
            <a href="tel:0769223338" title="Gọi ngay" class="w-14 h-14 flex items-center justify-center bg-gray-700 text-white rounded-full shadow-lg transition-all duration-300 ease-in-out transform hover:bg-green-500 hover:-translate-y-1 hover:scale-110">
                <i class="fas fa-phone-alt text-2xl"></i>
            </a>
            <a href="https://web.facebook.com/profile.php?id=61554157784654" target="_blank" rel="noopener noreferrer" title="Facebook" class="w-14 h-14 flex items-center justify-center bg-gray-700 text-white rounded-full shadow-lg transition-all duration-300 ease-in-out transform hover:bg-blue-600 hover:-translate-y-1 hover:scale-110">
                <i class="fab fa-facebook-f text-2xl"></i>
            </a>
            <a href="https://www.instagram.com/lynlydesign?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" title="Instagram" class="w-14 h-14 flex items-center justify-center bg-gray-700 text-white rounded-full shadow-lg transition-all duration-300 ease-in-out transform hover:bg-pink-500 hover:-translate-y-1 hover:scale-110">
                <i class="fab fa-instagram text-2xl"></i>
            </a>
        </div>
        <button id="contact-fab" title="Liên hệ" class="relative w-16 h-16 flex items-center justify-center bg-primary text-white rounded-full shadow-xl focus:outline-none">
            <span class="absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75 animate-ping"></span>
            <div id="fab-icon-open" class="transition-transform duration-300 ease-in-out">
                <i class="fas fa-comment-dots text-3xl"></i>
            </div>
            <div id="fab-icon-close" class="absolute transition-transform duration-300 ease-in-out scale-0">
                <i class="fas fa-times text-3xl"></i>
            </div>
        </button>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // === LOGIC CHO NÚT TRÒ CHUYỆN THÔNG MINH (ĐÃ SỬA LỖI) ===
        const fabButton = document.getElementById('contact-fab');
        const fabMenu = document.getElementById('fab-menu');
        const iconOpen = document.getElementById('fab-icon-open');
        const iconClose = document.getElementById('fab-icon-close');

        if (fabButton && fabMenu) {
            fabButton.addEventListener('click', () => {
                const isHidden = fabMenu.classList.contains('opacity-0');

                // Toggle classes for the menu visibility and position
                fabMenu.classList.toggle('opacity-0', !isHidden);
                fabMenu.classList.toggle('opacity-100', isHidden);
                fabMenu.classList.toggle('-translate-y-4', !isHidden);
                fabMenu.classList.toggle('translate-y-0', isHidden);
                fabMenu.classList.toggle('pointer-events-none', !isHidden);

                // Toggle classes for the main button icon switch
                iconOpen.classList.toggle('scale-0', isHidden);
                iconOpen.classList.toggle('scale-100', !isHidden);
                iconClose.classList.toggle('scale-0', !isHidden);
                iconClose.classList.toggle('scale-100', isHidden);
            });
        }
    });
</script>
<style>
    /* Thêm các lớp chuyển đổi cho hiệu ứng mượt mà */
    #fab-menu {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    #fab-icon-open,
    #fab-icon-close {
        transition: transform 0.3s ease;
    }
</style>