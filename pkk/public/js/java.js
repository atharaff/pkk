function scrollCards(direction) {
    const container = document.querySelector('.cards-wrapper');
    
    if (direction === 'right') {
        container.scrollBy({
            left: 250,  // Atur jarak scroll ke kanan
            behavior: 'smooth'  // Animasi scroll
        });
    } else if (direction === 'left') {
        container.scrollBy({
            left: -250,  // Atur jarak scroll ke kiri
            behavior: 'smooth'  // Animasi scroll
        });
    }
}


