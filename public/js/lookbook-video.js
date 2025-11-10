function toggleVideoPlay(container) {
    const video = container.querySelector('video');
    const overlay = container.querySelector('.overlay');

    if (video.paused) {
        video.play();
        overlay.style.display = 'none'; // Ẩn overlay khi phát
    } else {
        video.pause();
        overlay.style.display = 'flex'; // Hiện lại overlay khi dừng
    }
}
