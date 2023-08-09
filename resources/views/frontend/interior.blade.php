@include('frontend.component.header')
@include('frontend.component.navbar')

<section id="desain-interior" class="w-full">
    <div id="header" class="container mt-20 flex w-full flex-col items-center justify-center py-32">
        <h1>DESAIN INTERIOR</h1>
        <p class="text-black-60 mb-4 max-w-[60%] text-center text-lg italic">Kami bisa bantu kamu untuk membuat Desain
            Interior ruangan yang nyaman dan argonomis, mewujudkan rumah impian kamu menjadi kenyataan dengan visual
            seperti asli.</p>
        <form action="" method="post"
            class="bg-white-01 flex w-[50%] overflow-hidden rounded-lg border-2 border-[#C7DDFF] text-center">
            <input type="text" name="search" id="" placeholder="Search..."
                class="bg-white-01 grow p-3 focus:outline-none">
            <button type="submit" class="text-warna-01 py-3 px-4 duration-300 hover:scale-125"><i
                    class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <p class="text-black-45 mt-8 mb-2 text-sm"><i>Tools yang kami gunakan :</i></p>
        <div class="flex flex-row gap-2">
            <img src="assets/img/Blender.png" class="h-8 w-auto object-contain opacity-75">
            <img src="assets/img/Sketchup.png" class="h-8 w-auto object-contain opacity-75">
            <img src="assets/img/vray.png" class="h-8 w-auto object-contain opacity-75">
            <img src="assets/img/AutoCAD.png" class="h-8 w-auto object-contain opacity-75">
        </div>
    </div>

    <div id="portofolio-list" class="container w-full">
        <div class="flex w-full flex-row justify-between px-4">
            <ul class="flex flex-row items-center text-sm">
                <li class="text-warna-01 hover:text-warna-01 bg-white-01 rounded-md py-2 px-4"><a
                        href="">Semua</a></li>
            </ul>
            <ul class="flex flex-row items-center gap-8 text-sm">
                <li class="text-black-45 hover:text-warna-01 font-normal"><a href="">Name <i
                            class="fa-solid fa-arrow-down-short-wide"></a></i></li>
                <li class="text-black-45 hover:text-warna-01 font-normal"><a href="">Lastest <i
                            class="fa-solid fa-arrow-down-short-wide"></a></i></li>
            </ul>
        </div>

        <div class="w-full grid grid-cols-4 gap-4 mt-4">
            @foreach ($interiors as $interior)
                <x-grid-interior judul="{{ $interior->judul }}" thumbnail="{{ $interior->thumbnail }}"
                    link="{{ $interior->link }}" deskripsi="{{ $interior->deskripsi }}" />
            @endforeach
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
@include('frontend.component.modal')
@include('frontend.component.footer')
