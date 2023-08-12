@include('frontend.component.header')
@include('frontend.component.navbar')

{{-- Header --}}
<section id="header" class="h-screen w-full pt-[5rem] pb-4">

    {{-- Icon di Background --}}
    <img src="assets/img/After Effects.png" width="40px"
        class="icon-move animasi-move left-[48%] top-[50%] rotate-[-6deg]" style="--durasi:3.5s;">
    <img src="assets/img/Audition.png" width="30px" class="icon-move animasi-move left-[18%] top-[55%] rotate-[-3deg]"
        style="--durasi:6.5s;">
    <img src="assets/img/Illustrator.png" width="30px"
        class="icon-move animasi-move top-[32%] left-[58%] rotate-[-14deg]" style="--durasi:3s;">
    <img src="assets/img/Photoshop.png" width="45px"
        class="icon-move animasi-move top-[25%] left-[50%] rotate-[11deg]" style="--durasi:5.5s;">
    <img src="assets/img/Premiere Pro.png" width="35px"
        class="icon-move animasi-move top-[55%] left-[14%] rotate-[5deg]" style="--durasi:4.4s;">
    <img src="assets/img/Xd.png" width="25px" class="icon-move animasi-move top-[20%] left-[8%] rotate-[-52deg]"
        style="--durasi:4s;">

    {{-- Header --}}
    <div class="container flex h-full w-full flex-col items-center justify-center">
        <div class="flex w-full grow items-center justify-center gap-12 px-12">
            <div class="grow">
                <h1>DESAIN RAKYAT</h1>
                <p class="text-black-60 mb-4 text-lg italic">“Kami menghargai keinginan pelanggan,<br>meskipun
                    permintaanya aneh-aneh.”</p>
                <div class="flex flex-row flex-nowrap gap-3">
                    <a href=""
                        class="bg-whatsapp rounded-md px-4 py-2 text-white opacity-80 duration-300 ease-in-out hover:scale-105"><i
                            class="fa-brands fa-whatsapp mr-2"></i>Hubungi Kami</a>
                    <div
                        class="bg-white-01 hover:bg-warna-02 text-black-60 hover:text-black-90 my-auto rounded-md px-4 py-2 text-sm font-medium opacity-80 duration-300 ease-in-out">
                        200+ Projects</div>
                    <div
                        class="bg-white-01 hover:bg-warna-02 text-black-60 hover:text-black-90 my-auto rounded-md px-4 py-2 text-sm font-medium opacity-80 duration-300 ease-in-out">
                        100+ Happy Clients</div>
                </div>
            </div>
            <div class="relative h-[20rem] w-[30%]">
                <div class="owl-carousel">
                    @foreach ($highlights as $highlight)
                        <img src="{{ asset('portfolio-files/highlight/' . $highlight->file) }}" alt=""
                            class="h-[16rem] object-contain">
                    @endforeach
                </div>
                <div class="absolute left-0 bottom-0 h-40 w-full rounded-lg bg-white drop-shadow">
                </div>
            </div>
        </div>

        {{-- Button Header --}}
        <div class="w-full">
            <div class="bg-white-01 grid grid-cols-5 gap-4 rounded-2xl p-4">
                @foreach ($highlights as $highlight)
                    <a href="" id=""
                        class="nav-owl rounded-2xl p-4 text-center duration-500 ease-in-out hover:bg-white hover:drop-shadow-sm">
                        <div class="w-100 h-24">
                            <img src="{{ asset('portfolio-files/highlight/' . $highlight->file) }}" alt=""
                                class="h-full w-full object-contain">
                        </div>
                        <p class="font-semibold">{{ $highlight->judul }}</p>
                        <p class="text-black-45 text-sm">{{ $highlight->subjudul }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 1,
            mouseDrag: false,
            touchDrag: false,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>',
                '<i class="fa-solid fa-chevron-right"></i>'
            ],
            loop: true,
            smartSpeed: 1000,
        });
    });
</script>

@include('frontend.component.footer')
