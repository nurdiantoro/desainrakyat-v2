<div class="drop-shadow-01 w-full rounded-md border bg-white p-2 flex flex-col">
    <div class="group relative aspect-video overflow-hidden rounded bg-gray-200"
        data-modal="https://www.youtube.com/embed/tfGSNMEhBw8?autoplay=1" onclick="openModal(this)">
        <img src="{{ asset('portfolio-files/video/' . $img) }}" class="h-full w-full rounded object-cover">
        <span
            class="text-warna-02 absolute left-1/2 top-1/2 z-20 translate-x-[-50%] translate-y-[-50%] text-[2rem] opacity-0 duration-300 ease-in-out group-hover:opacity-100">
            <i class="fa-solid fa-play"></i>
        </span>
        <span
            class="bg-black-90 absolute top-0 left-0 z-10 h-full w-full rounded opacity-0 duration-500 ease-in-out group-hover:opacity-60">
        </span>
    </div>
    <p class="text-warna-03 limit-1 mt-4 text-sm">{{ $text }}</p>
</div>
