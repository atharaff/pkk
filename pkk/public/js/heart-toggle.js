// Fungsi untuk toggle icon heart
function toggleHeart(icon) {
    // Ganti kelas ikon antara 'bi-heart' dan 'bi-heart-fill'
    if (icon.classList.contains('bi-heart')) {
        icon.classList.remove('bi-heart');
        icon.classList.add('bi-heart-fill');
        icon.classList.add('active'); // Tambahkan efek warna merah
    } else {
        icon.classList.remove('bi-heart-fill');
        icon.classList.add('bi-heart');
        icon.classList.remove('active'); // Kembali ke warna abu-abu
    }
}

// Event listener untuk semua elemen dengan class 'bag-icon'
document.addEventListener('DOMContentLoaded', () => {
    const heartIcons = document.querySelectorAll('.bag-icon');
    heartIcons.forEach(icon => {
        icon.addEventListener('click', () => toggleHeart(icon));
    });
});
