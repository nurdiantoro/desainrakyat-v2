<div id="myModal" class="modal hidden z-50 relative">
    <!-- Background Overlay -->
    <div class="fixed inset-0 bg-black opacity-75" onclick="closeModal()"></div>

    <!-- Modal Content -->
    <div class="fixed inset-0 w-[800px] aspect-video flex items-center justify-center m-auto">
        <div class="modal-content bg-white rounded-lg p-4">
            <img class="w-full h-auto max-h-[500px] mb-4 rounded-md" id="modalImage">
            <button class="close hover:border-warna-01 rounded-md border px-4 py-2 shadow m-auto block"
                onclick="closeModal()">Tutup</button>
        </div>
    </div>
</div>

<script>
    function openModal(that) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("modalImage");

        modal.style.display = "block";
        modalImg.src = that.getAttribute('src');
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        var modal = document.getElementById("myModal");

        modal.style.display = "none";
        document.body.style.overflow = "";
    }
</script>
