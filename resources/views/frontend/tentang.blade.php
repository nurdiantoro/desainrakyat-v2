@include('frontend.component.header')
@include('frontend.component.navbar')

<section id="tentang" class="min-h-screen w-full">
    <div class="container mt-20 mb-32 flex w-full flex-col items-center justify-center">
        <img src="{{ asset('assets/img/Logo DR.png') }}" alt="" class="h-[20rem] w-auto object-contain">
        <h1>TENTANG KAMI</h1>
        <p class="text-black-60 max-w-[80%] text-center">Desain Rakyat adalah sebuah solusi bagi kamu yang memiliki usaha
            dan ingin membuat desain namun tidak memiliki karyawan yang mumpuni, kami hadir untuk teman-teman yang
            menginginkan desain profesional namun dengan harga bersahabat. Jangan ragu dan sungkan untuk menghubungi
            kami ya.</p>
        <div class="text-black-45 mt-8 flex flex-row gap-8 text-sm">
            <div class="flex flex-col items-center rounded-md bg-white p-2 duration-300">
                <img src="{{ asset('assets/img/purse.png') }}" class="mb-2 h-12 object-contain">
                <span class="text-center">Murah</span>
            </div>
            <div class="flex flex-col items-center rounded-md bg-white p-2 duration-300">
                <img src="{{ asset('assets/img/chat.png') }}" class="mb-2 h-12 object-contain">
                <span class="text-center">Respon<br>Cepat</span>
            </div>
            <div class="flex flex-col items-center rounded-md bg-white p-2 duration-300">
                <img src="{{ asset('assets/img/stopwatch.png') }}" class="mb-2 h-12 object-contain">
                <span class="text-center">Tepat<br>Waktu</span>
            </div>
            <div class="flex flex-col items-center rounded-md bg-white p-2 duration-300">
                <img src="{{ asset('assets/img/good-review.png') }}" class="mb-2 h-12 object-contain">
                <span class="text-center">Profesional</span>
            </div>
        </div>
    </div>
    <div class="container mb-32">
        <h2 class="text-black-90 mb-2 text-center text-2xl font-bold drop-shadow">KATA MEREKA</h2>
        <div class="flex flex-row flex-wrap justify-center">
            <?php for($i=0; $i<5;$i++){ ?>
            <div class="w-[33%] p-4" data-aos="fade-up" data-aos-delay="300">
                <div class="rounded-md border bg-white p-4">
                    <div class="mb-2 flex items-center gap-4">
                        <img src="{{ asset('assets/img/lidya.jpg') }}" class="h-14 rounded-full object-contain">
                        <div class="flex flex-col">
                            <span>Lidya Rahma</span>
                            <span class="text-warna-03 text-sm font-normal italic">WhatsApp Chat</span>
                        </div>
                    </div>
                    <p class="text-black-60 text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error
                        odit veniam incidunt sed dolorem fuga aspernatur doloribus! Repudiandae doloribus, magni autem
                        quos, laudantium pariatur, officia placeat dicta ipsam quia nemo.</p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

@include('frontend.component.footer')
