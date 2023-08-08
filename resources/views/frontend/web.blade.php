@include('frontend.component.header')
@include('frontend.component.navbar')

<section id="web-ui-ux" class="w-full">
    <div id="header" class="container mt-20 flex w-full flex-col items-center justify-center py-32">
        <h1>WEB & UI/UX</h1>
        <p class="text-black-60 mb-4 max-w-[60%] text-center text-lg italic">Kami bisa bantu kamu untuk membuat Website kamu dari desain Frontend sampai pemrograman Backend !</p>
        <form action="" method="post" class="bg-white-01 flex w-[50%] overflow-hidden rounded-lg border-2 border-[#C7DDFF] text-center">
            <input type="text" name="search" id="" placeholder="Search..." class="bg-white-01 grow p-3 focus:outline-none">
            <button type="submit" class="text-warna-01 py-3 px-4 duration-300 hover:scale-125"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <p class="text-black-45 mt-8 mb-2 text-sm"><i>Tools yang kami gunakan :</i></p>
        <div class="flex flex-row gap-2">
            <img src="assets/img/Xd.png" class="h-8 w-auto object-contain opacity-75">
            <img src="assets/img/Figma.png" class="h-8 w-auto object-contain opacity-75">
            <img src="assets/img/Laravel.png" class="h-8 w-auto object-contain opacity-75">
            <img src="assets/img/Tailwind CSS.png" class="h-8 w-auto object-contain opacity-75">
        </div>
    </div>

    <div id="portofolio-list" class="container w-full">
        <div class="flex w-full flex-row justify-between px-4">
            <ul class="flex flex-row items-center text-sm">
                <li class="text-warna-01 hover:text-warna-01 bg-white-01 rounded-md py-2 px-4"><a href="">Semua</a></li>
            </ul>
            <ul class="flex flex-row items-center gap-8 text-sm">
                <li class="text-black-45 hover:text-warna-01 font-normal"><a href="">Name <i class="fa-solid fa-arrow-down-short-wide"></a></i></li>
                <li class="text-black-45 hover:text-warna-01 font-normal"><a href="">Lastest <i class="fa-solid fa-arrow-down-short-wide"></a></i></li>
            </ul>
        </div>

        <div class="flex w-full flex-wrap justify-start">
            <?php for($i=0;$i<=10;$i++){ ?>
            <div class="w-1/2 p-4">
                <div class="drop-shadow-01 flex h-full w-full flex-row gap-2 rounded-md border bg-white p-2">
                    <div class="group h-40 w-[50%] overflow-hidden rounded bg-gray-200">
                        <img src="portfolio-files/vector-03.png" class="h-full w-full object-contain duration-500 ease-in-out group-hover:scale-110">
                    </div>
                    <div class="flex h-full w-[50%] flex-col">
                        <p class="text-warna-03 text-sm">PT. Debindomulti Adhiswasti</p>
                        <p class="text-black-45 text-sm font-normal">Perusahaan yang bergerak di bidang Profesional Event Organizer (PEO) yang sudah berdiri sejak 1987</p>
                        <a href="" class="mt-auto pb-2"><span class="text-warna-01 bg-white-01 mt-auto items-end rounded-md p-2 text-center text-sm font-normal">Kunjungi Website</span></a>
                    </div>
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
