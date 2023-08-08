@include('frontend.component.header')
@include('frontend.component.navbar')

<section id="desaingrafis" class="w-full">

    <div id="header" class="container mt-20 flex w-full flex-col items-center justify-center py-32">
        <h1>DESAIN GRAFIS</h1>
        <p class="text-black-60 mb-4 max-w-[60%] text-center text-lg italic">Kami bisa bantu kamu untuk desain Poster, Banner, Kartu Nama, Baju, dll.</p>
        <form action="" method="post" class="bg-white-01 flex w-[50%] overflow-hidden rounded-lg border-2 border-[#C7DDFF] text-center">
            <input type="text" name="search" id="" placeholder="Search..." class="bg-white-01 grow p-3 focus:outline-none">
            <button type="submit" class="text-warna-01 py-3 px-4 duration-300 hover:scale-125"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <p class="text-black-45 mt-8 mb-2 text-sm"><i>Tools yang kami gunakan :</i></p>
        <div class="flex flex-row gap-2">
            <img src="assets/img/Illustrator.png" class="h-8 w-auto object-contain opacity-75">
            <img src="assets/img/Photoshop.png" class="h-8 w-auto object-contain opacity-75">
        </div>
    </div>

    <div id="portofolio-list" class="container w-full">
        <div class="flex w-full flex-row justify-between px-4">
            <ul class="flex flex-row items-center text-sm">
                <li class="text-warna-01 hover:text-warna-01 bg-white-01 rounded-md py-2 px-4"><a href="">Semua</a></li>
                <li class="text-black-45 hover:text-warna-01 py-2 px-4"><a href="">Logo</a></li>
                <li class="text-black-45 hover:text-warna-01 py-2 px-4"><a href="">Banner & Poster</a></li>
                <li class="text-black-45 hover:text-warna-01 py-2 px-4"><a href="">Vector Art</a></li>
            </ul>
            <ul class="flex flex-row items-center gap-8 text-sm">
                <li class="text-black-45 hover:text-warna-01 font-normal"><a href="">Name <i class="fa-solid fa-arrow-down-short-wide"></a></i></li>
                <li class="text-black-45 hover:text-warna-01 font-normal"><a href="">Lastest <i class="fa-solid fa-arrow-down-short-wide"></a></i></li>
            </ul>
        </div>

        <div class="flex w-full flex-wrap justify-start">
            <?php for($i=0;$i<=10;$i++){ ?>
            <div class="w-1/4 p-4">
                <div class="drop-shadow-01 w-full rounded-md border bg-white p-2">
                    <div class="group mb-4 h-32 w-full overflow-hidden rounded bg-gray-200">
                        <img src="portfolio-files/vector-03.png" class="h-full w-full object-contain duration-500 ease-in-out group-hover:scale-110">
                    </div>
                    <p class="text-warna-03 text-sm">Vector Bapak Tarizi <?= $i ?></p>
                    <p class="text-black-45 text-sm font-normal">Vector Art</p>
                </div>
            </div>
            <?php } ?>
        </div>

        <nav class="flex w-full justify-center pt-16 pb-32">
            <ul class="text-warna-01 flex flex-row gap-2">
                <li><a class="hover:border-warna-01 rounded-md border px-4 py-3 shadow" href="#">Previous</a></li>
                <li><a class="rounded-md px-4 py-3 hover:bg-gray-100" href="#">1</a></li>
                <li><a class="bg-warna-01 rounded-md px-4 py-3 text-white" href="#">2</a></li>
                <li><a class="rounded-md px-4 py-3 hover:bg-gray-100" href="#">3</a></li>
                <li><a class="hover:border-warna-01 rounded-md border px-4 py-3 shadow" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</section>

@include('frontend.component.footer')
