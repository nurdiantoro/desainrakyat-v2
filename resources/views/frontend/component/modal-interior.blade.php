<script>
    $(document).ready(function() {
        $('.gallery-image').click(function() {
            var galleryId = $(this).data('gallery-id');
            var carouselContainer = $('.modal .carousel');

            // Hapus konten carousel sebelumnya (jika ada)
            carouselContainer.empty();

            // Ambil gambar-gambar dari galeri yang sesuai dengan ID
            var gallery = galleries.find(function(gallery) {
                return gallery.id === galleryId;
            });

            // Tambahkan gambar-gambar ke dalam carousel
            gallery.carouselImages.forEach(function(carouselImage) {
                var carouselItem = $('<div class="carousel-item"><img src="' + carouselImage
                    .image_url + '" alt="' + carouselImage.title + '"></div>');
                carouselContainer.append(carouselItem);
            });

            // Inisialisasi Owl-Carousel di dalam modal
            carouselContainer.owlCarousel({
                items: 1,
                loop: true,
                // Konfigurasi lain yang Anda inginkan
            });

            // Tampilkan modal
            $('.modal').fadeIn();
        });

        // Tombol untuk menutup modal
        $('.modal .close-modal-btn').click(function() {
            var carouselContainer = $('.modal .carousel');

            // Hentikan Owl-Carousel
            carouselContainer.trigger('destroy.owl.carousel');

            // Sembunyikan modal
            $('.modal').fadeOut();
        });
    });
</script>
