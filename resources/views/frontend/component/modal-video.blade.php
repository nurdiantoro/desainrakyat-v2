<div id="myModal" class="modal hidden z-50 relative">
    <!-- Background Overlay -->
    <div class="fixed inset-0 bg-black opacity-75" onclick="closeModal()"></div>

    <!-- Modal Content -->
    <div class="fixed inset-0 w-[800px] aspect-video flex items-center justify-center m-auto">

        <div class="modal-content bg-white rounded-lg p-4 w-full aspect-video">
            <div id="player" class="mb-4 rounded-md w-full h-auto aspect-video"></div>
            {{-- <iframe src="" allowfullscreen id="modalImage" class="mb-4 rounded-md w-full aspect-video"></iframe> --}}
            <img class="w-full h-auto mb-4 rounded-md">
            <button class="close hover:border-warna-01 rounded-md border px-4 py-2 shadow m-auto block"
                onclick="closeModal()" id="pauseButton">Tutup</button>
        </div>
    </div>
</div>

<script src="https://www.youtube.com/iframe_api"></script>

<script>
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            videoId: 'NQ2EaOLAuKE', // Ganti dengan ID video YouTube yang ingin Anda mainkan
            events: {
                'onReady': onPlayerReady
            }
        });
    }

    function onPlayerReady(event) {
        var pauseButton = document.getElementById('pauseButton');
        pauseButton.addEventListener('click', function() {
            player.pauseVideo();
        });
    }

    function openModal(that) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("modalImage");

        modal.style.display = "block";
        modalImg.src = that.getAttribute('data-modal');
        document.body.style.overflow = "hidden";
    }

    function closeModal(event) {
        var modal = document.getElementById("myModal");

        player.pauseVideo();
        modal.style.display = "none";
        document.body.style.overflow = "";


    }
</script>
