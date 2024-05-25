<?php
$home = $desaingrafis = $editvideo = $web = $interior = $tentang = '';

request()->is('/') ? ($home = 'active') : '';
request()->is('desaingrafis') ? ($desaingrafis = 'active') : '';
request()->is('editvideo') ? ($editvideo = 'active') : '';
request()->is('web') ? ($web = 'active') : '';
request()->is('interior') ? ($interior = 'active') : '';
request()->is('tentang') ? ($tentang = 'active') : '';

?>

<nav class="fixed top-0 z-20 h-[4rem] w-full bg-white/70 duration-300" id="navbar">
    <div class="container px-4 flex h-full flex-row items-center justify-between">
        <a href="/" id="navbar-brand" class="flex h-full flex-row items-center py-4">
            <img src="{{ asset('storage/img/Logo DR.png') }}" class="mr-4 h-full w-auto">
            <span class="gradient font-bold">Desain Rakyat</span>
        </a>
        <ul class="h-full flex-col items-center text-sm hidden lg:flex lg:flex-row gap-2">
            <li class="navbar before:contents[''] {{ $home }}">
                <a class="py-4" href="/">Home</a>
            </li>
            <li class="navbar before:contents[''] {{ $desaingrafis }}">
                <a class="py-4" href="/desaingrafis">Desain Grafis</a>
            </li>
            <li class="navbar before:contents[''] {{ $editvideo }}">
                <a class="py-4" href="/editvideo">Edit Video</a>
            </li>
            <li class="navbar before:contents[''] {{ $web }}">
                <a class="py-4" href="/web">Web & UI/UX</a>
            </li>
            <li class="navbar before:contents[''] {{ $interior }}">
                <a class="py-4" href="/interior">Desain Interior</a>
            </li>
            <li class="navbar before:contents[''] {{ $tentang }}">
                <a class="py-4" href="/tentang">Tentang Kami</a>
            </li>
        </ul>
        <div class="h-full flex flex-row items-center">
            <div class="h-full py-2">
                <a href="https://www.tokopedia.com/desainrakyat" target="_blank"
                    class="border-tokopedia text-tokopedia hover:bg-tokopedia hover:text-white flex h-full flex-row items-center rounded-lg lg:border-2 bg-white py-2 px-2 lg:px-4 text-sm">
                    <img src="{{ asset('storage/img/tokopedia.png') }}" class="lg:mr-2 h-full w-auto">
                    <span class="hidden lg:inline">Tokopedia</span>
                </a>
            </div>
            <div class="lg:hidden text-warna-02 text-3xl p-2">
                <i class="fa-solid fa-bars" id="navbar-toggle"></i>
            </div>
        </div>
    </div>
</nav>
