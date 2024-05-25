@include('frontend.component.header')
@include('frontend.component.navbar')

{{-- Header --}}
<section id="header" class="h-screen w-full pt-[5rem] pb-4">

    {{-- Icon di Background --}}
    <div class="hidden lg:block">
        <div class="icon-move animasi-move left-[48%] top-[50%] " style="--durasi:3.5s;">
            <img src="{{ asset('storage/img/After Effects.png') }}" class="rotate-[-6deg]" width="40px">
        </div>
        <div class="icon-move animasi-move left-[18%] top-[60%] " style="--durasi:6.5s;">
            <img src="{{ asset('storage/img/Audition.png') }}" class="rotate-[-3deg]" width="30px">
        </div>
        <div class="icon-move animasi-move top-[32%] left-[58%] " style="--durasi:3s;">
            <img src="{{ asset('storage/img/Illustrator.png') }}" class="rotate-[-14deg]" width="30px">
        </div>
        <div class="icon-move animasi-move top-[25%] left-[50%] " style="--durasi:5.5s;">
            <img src="{{ asset('storage/img/Photoshop.png') }}" class="rotate-[11deg]" width="45px">
        </div>
        <div class="icon-move animasi-move top-[55%] left-[14%] " style="--durasi:4.4s;">
            <img src="{{ asset('storage/img/Premiere Pro.png') }}" class="rotate-[5deg]" width="35px">
        </div>
        <div class="icon-move animasi-move top-[20%] left-[18%] " style="--durasi:4s;">
            <img src="{{ asset('storage/img/Figma.png') }}" class="rotate-[-52deg]" width="40px">
        </div>
    </div>

    {{-- Header --}}
    <div class="container px-4 flex h-full w-full flex-col items-center justify-center">
        <div class="flex flex-wrap w-full grow items-center justify-center gap-12 lg:px-12">
            <div class="grow">
                <h1>DESAIN RAKYAT</h1>
                <p class="text-black-90 mb-4 text-lg italic max-w-[30rem]">“Kami menghargai keinginan pelanggan,
                    meskipun
                    permintaanya aneh-aneh.”</p>
                <div class="flex flex-row flex-wrap gap-3">
                    <a href="https://wa.me/6287772315345" target="_blank"
                        class="bg-whatsapp rounded-md px-4 py-2 text-white duration-300 ease-in-out hover:scale-105 z-10"><i
                            class="fa-brands fa-whatsapp mr-2"></i>Hubungi Kami</a>
                    <div
                        class="bg-sky-100 text-sky-600 my-auto rounded-md px-4 py-2 text-sm font-medium duration-300 ease-in-out z-10">
                        200+ Projects</div>
                    <div
                        class="bg-sky-100 text-sky-600 my-auto rounded-md px-4 py-2 text-sm font-medium duration-300 ease-in-out z-10">
                        100+ Happy Clients</div>
                </div>
            </div>
            <div class="relative h-[20rem] w-full lg:w-[30%]">
                <div class="owl-carousel">
                    @foreach ($highlights as $highlight)
                        <img src="{{ asset('storage/portfolio/highlight/' . $highlight->file) }}" alt=""
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
                            <img src="{{ asset('storage/portfolio/highlight/' . $highlight->file) }}" alt=""
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
            autoplay: true,
            autoplayTimeout: 3000,
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
