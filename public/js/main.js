// === LOG KHỞI ĐỘNG ===
console.log('🚀 main.js loading...');

document.addEventListener('DOMContentLoaded', () => {
    console.log('✅ DOM Content Loaded');

    // === FAQ TOGGLE ===
    const faqQuestions = document.querySelectorAll('.faq-question');
    if (faqQuestions.length > 0) {
        console.log(`📋 Found ${faqQuestions.length} FAQ items`);
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const answer = faqItem.querySelector('.faq-answer');
                const icon = question.querySelector('i');

                // Đóng tất cả FAQ khác
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem) {
                        const otherAnswer = item.querySelector('.faq-answer');
                        const otherIcon = item.querySelector('.faq-question i');
                        if (otherAnswer) otherAnswer.classList.add('hidden');
                        if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                    }
                });

                // Toggle FAQ hiện tại
                if (answer) {
                    answer.classList.toggle('hidden');
                    if (icon) {
                        icon.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
                    }
                }
            });
        });
    }

    // === SWIPER SLIDER: COLLECTIONS ===
    const collectionsWrapper = document.querySelector('.collections-swiper .swiper-wrapper');
    if (collectionsWrapper && collectionsWrapper.children.length > 0) {
        new Swiper('.collections-swiper', {
            slidesPerView: 2,
            spaceBetween: 16,
            grid: { rows: 2, fill: 'row' },
            pagination: { el: '.collections-pagination', clickable: true },
            navigation: { nextEl: '.collections-next', prevEl: '.collections-prev' },
            breakpoints: {
                768: { slidesPerView: 4, spaceBetween: 20 },
                1280: { slidesPerView: 5, spaceBetween: 24 }
            }
        });
        console.log('✅ Collections Swiper initialized');
    }

    // === SWIPER SLIDER: HOT TREND ===
    const hottrendWrapper = document.querySelector('.hottrend-swiper .swiper-wrapper');
    if (hottrendWrapper && hottrendWrapper.children.length > 0) {
        new Swiper('.hottrend-swiper', {
            slidesPerView: 2,
            spaceBetween: 16,
            grid: { rows: 2, fill: 'row' },
            pagination: { el: '.hottrend-pagination', clickable: true },
            navigation: { nextEl: '.hottrend-next', prevEl: '.hottrend-prev' },
            breakpoints: {
                768: { slidesPerView: 4, spaceBetween: 20 },
                1280: { slidesPerView: 5, spaceBetween: 24 }
            }
        });
        console.log('✅ Hot Trend Swiper initialized');
    }

    // === FLASH SALE COUNTDOWN ===
    initFlashSaleCountdown();

    // === ANIMATED COUNTER (Hero Section) ===
    initCounterAnimation();
});

// === FLASH SALE COUNTDOWN FUNCTION ===
function initFlashSaleCountdown() {
    const hoursEl = document.getElementById('hours');
    const minutesEl = document.getElementById('minutes');
    const secondsEl = document.getElementById('seconds');

    console.log('🔍 Looking for countdown elements:');
    console.log('  hours:', hoursEl);
    console.log('  minutes:', minutesEl);
    console.log('  seconds:', secondsEl);

    if (!hoursEl || !minutesEl || !secondsEl) {
        console.error('❌ Countdown elements NOT found!');
        console.error('   Make sure your HTML has: <span id="hours">, <span id="minutes">, <span id="seconds">');
        return;
    }

    console.log('✅ Countdown elements found! Starting countdown...');

    function updateCountdown() {
        const now = new Date();

        // Tính đến 23:59:59 hôm nay
        const endOfDay = new Date(
            now.getFullYear(),
            now.getMonth(),
            now.getDate(),
            23, 59, 59, 999
        );

        let distance = endOfDay.getTime() - now.getTime();

        // Nếu đã qua 23:59:59, tính đến ngày mai
        if (distance <= 0) {
            const tomorrow = new Date(now);
            tomorrow.setDate(tomorrow.getDate() + 1);
            tomorrow.setHours(23, 59, 59, 999);
            distance = tomorrow.getTime() - now.getTime();
        }

        // Tính giờ, phút, giây
        const hours = Math.floor(distance / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Cập nhật DOM với animation
        updateWithAnimation(hoursEl, hours);
        updateWithAnimation(minutesEl, minutes);
        updateWithAnimation(secondsEl, seconds);
    }

    function updateWithAnimation(element, value) {
        const newValue = String(value).padStart(2, '0');

        if (element.textContent !== newValue) {
            // Thêm animation khi số thay đổi
            element.style.transition = 'transform 0.2s ease';
            element.style.transform = 'scale(1.2)';
            element.textContent = newValue;

            setTimeout(() => {
                element.style.transform = 'scale(1)';
            }, 200);
        }
    }

    // Cập nhật ngay lập tức
    updateCountdown();

    // Cập nhật mỗi giây
    const intervalId = setInterval(updateCountdown, 1000);
    console.log('⏰ Countdown started with interval ID:', intervalId);
}

document.addEventListener("DOMContentLoaded", function () {
    // --- Thời gian kết thúc flash sale ---
    const endTime = new Date("2025-10-20T23:59:59").getTime(); // chỉnh ngày ở đây

    const daysEl = document.getElementById("days");
    const hoursEl = document.getElementById("hours");
    const minutesEl = document.getElementById("minutes");
    const secondsEl = document.getElementById("seconds");

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = endTime - now;

        if (distance <= 0) {
            document.getElementById("countdown").innerHTML =
                "<span class='text-xl font-semibold'>🎉 Flash Sale đã kết thúc!</span>";
            clearInterval(timer);
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        daysEl.textContent = days.toString().padStart(2, "0");
        hoursEl.textContent = hours.toString().padStart(2, "0");
        minutesEl.textContent = minutes.toString().padStart(2, "0");
        secondsEl.textContent = seconds.toString().padStart(2, "0");
    }

    updateCountdown(); // chạy ngay lần đầu
    const timer = setInterval(updateCountdown, 1000);
});
// Animated Counter Function
function animateCounter(element) {
    const target = parseFloat(element.getAttribute('data-target'));
    const isDecimal = target % 1 !== 0;
    const duration = 2000; // 2 seconds
    const steps = 60;
    const increment = target / steps;
    let current = 0;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }

        if (isDecimal) {
            element.textContent = current.toFixed(1);
        } else {
            element.textContent = Math.floor(current).toLocaleString('vi-VN');
        }
    }, duration / steps);
}

// Intersection Observer to trigger animation when visible
const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counters = entry.target.querySelectorAll('.counter');
            counters.forEach(counter => {
                if (!counter.classList.contains('animated')) {
                    counter.classList.add('animated');
                    animateCounter(counter);
                }
            });
        }
    });
}, observerOptions);

// Observe stats section
document.addEventListener('DOMContentLoaded', () => {
    const statsSection = document.querySelector('.grid.grid-cols-3');
    if (statsSection) {
        observer.observe(statsSection);
    }
});