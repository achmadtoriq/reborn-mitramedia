import './bootstrap';
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2, // Number of slides per view
        spaceBetween: 10,  // Default space between slides
        loop: true,
        autoplay: {
            delay: 3000,
        },
        // Add breakpoints for responsive behavior
        breakpoints: {
            640: {
                slidesPerView: 2, // 1 slide on screens >= 640px
            },
            768: {
                slidesPerView: 3, // 2 slides on screens >= 768px
            },
            1024: {
                slidesPerView: 5, // 3 slides on screens >= 1024px
            },
        },
    });

    // Atur koordinat awal (misal: Surabaya)
    var map = L.map('map').setView([-7.300405, 112.765952], 20);

    // Define custom icon
    var customIcon = L.icon({
        iconUrl: 'assets/location.png', // Path to your icon in the public folder
        iconSize: [30, 35], // Size of the icon [width, height]
        iconAnchor: [22, 94], // Point of the icon which will correspond to marker's location
        popupAnchor: [-3, -76], // Point from which the popup should open relative to the iconAnchor
    });

    // Tambahkan tile layer dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: ''
    }).addTo(map);

    // Tambahkan marker di koordinat tertentu
    L.marker([-7.300405, 112.765952], {
            icon: customIcon
        }).addTo(map)
        .bindPopup('Mitramedia Advertising')
        .openPopup();
});
