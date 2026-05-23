function filterHotels(city) {
    const hotels = document.querySelectorAll('.hotel');
    hotels.forEach(hotel => {
        hotel.style.display = city === 'all' || hotel.classList.contains(city) ? 'flex' : 'none';
    });
}

function showHotelPopup(image) {
    const card = image.closest('.hotel');
    const title = card.querySelector('h4').textContent;
    const description = card.querySelector('p.text-muted').textContent;
    const location = card.querySelector('.badge').textContent;
    const price = card.querySelector('.fw-bold').textContent;

    document.getElementById('hotelDetailModalLabel').textContent = title;
    document.getElementById('modalHotelTitle').textContent = title;
    document.getElementById('modalHotelDescription').textContent = description;
    document.getElementById('modalHotelLocation').textContent = location;
    document.getElementById('modalHotelPrice').textContent = price;
    document.getElementById('modalHotelImage').src = image.src;
    document.getElementById('modalHotelImage').alt = image.alt;
    document.getElementById('hotelDetailLink').href = 'add-listing.php';

    const modalElement = document.getElementById('hotelDetailModal');
    const modal = new bootstrap.Modal(modalElement);
    modal.show();
}
