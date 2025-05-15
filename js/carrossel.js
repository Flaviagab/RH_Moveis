function scrollCarousel(direction) {
    const track = document.getElementById('carouselTrack');
    const scrollAmount = 300 + 16;
    track.scrollBy({
        left: direction * scrollAmount * 3,
        behavior: 'smooth'
    });
}