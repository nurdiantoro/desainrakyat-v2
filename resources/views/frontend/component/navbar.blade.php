<?php
$home = $desaingrafis = $editvideo = $web = $interior = $tentang = '';
if ($route == '') {
    // Cek url untuk navbar active
} elseif ($route == 'index') {
    $home = 'active';
} elseif ($route == 'desaingrafis') {
    $desaingrafis = 'active';
} elseif ($route == 'editvideo') {
    $editvideo = 'active';
} elseif ($route == 'web') {
    $web = 'active';
} elseif ($route == 'interior') {
    $interior = 'active';
} elseif ($route == 'tentang') {
    $tentang = 'active';
}
?>

<nav class="fixed top-0 z-20 h-[4rem] w-full bg-white/70 duration-300" id="navbar">
    <div class="container flex h-full flex-row items-center">
        <a href="/" id="navbar-brand" class="mr-12 flex h-full flex-row items-center py-4">
            <img src="assets/img/Logo DR.png" class="mr-4 h-full w-auto">
            <span class="gradient font-bold">Desain Rakyat</span>
        </a>
        <ul class="flex h-full flex-col items-center text-sm lg:flex-row">
            <li class="navbar before:contents[''] {{ $home }}"><a class="py-4" href="/">Home</a></li>
            <li class="navbar before:contents[''] {{ $desaingrafis }}"><a class="py-4" href="/desaingrafis">Desain
                    Grafis</a></li>
            <li class="navbar before:contents[''] {{ $editvideo }}"><a class="py-4" href="/editvideo">Edit
                    Video</a></li>
            <li class="navbar before:contents[''] {{ $web }}"><a class="py-4" href="/web">Web & UI/UX</a>
            </li>
            <li class="navbar before:contents[''] {{ $interior }}"><a class="py-4" href="/interior">Desain
                    Interior</a></li>
            <li class="navbar before:contents[''] {{ $tentang }}"><a class="py-4" href="/tentang">Tentang
                    Kami</a></li>
        </ul>
        <div class="ml-auto h-full py-2">
            <a href="https://www.tokopedia.com/desainrakyat" target="_blank"
                class="border-tokopedia text-tokopedia hover:bg-white-01 flex h-full flex-row items-center rounded-lg border bg-white py-2 px-4 text-sm">
                <img src="assets/img/tokopedia.png" class="mr-2 h-full w-auto">
                <span>Tokopedia</span>
            </a>
        </div>
    </div>
</nav>

<script>
    // Fungsi untuk mengubah tampilan navbar saat scroll
    function handleScroll() {
        const navbar = document.getElementById('navbar');
        const scrollY = window.scrollY;

        const aktif = 'shadow-md backdrop-blur-md'

        // Ganti tampilan navbar ketika user melakukan scroll
        if (scrollY > 100) {
            navbar.classList.add(...aktif.split(' '));
        } else {
            navbar.classList.remove(...aktif.split(' '));
        }
    }

    // Tambahkan event listener untuk mendeteksi perubahan scroll
    window.addEventListener('scroll', handleScroll);
</script>
