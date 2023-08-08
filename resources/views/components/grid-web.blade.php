<div class="drop-shadow-01 flex h-full w-full flex-col gap-2 rounded-md border bg-white p-2">
    <div class="group h-full overflow-hidden rounded bg-gray-200 aspect-video">
        <img src="{{ asset('portfolio-files/web/' . $thumbnail) }}"
            class="h-full w-full object-contain duration-500 ease-in-out group-hover:scale-110">
    </div>
    <div class="flex h-full flex-col">
        <p class="text-warna-03 text-sm">{{ $judul }}</p>
        <p class="text-black-45 text-sm font-normal">{{ $deskripsi }}</p>
        @if ($link != '')
            <a href="{{ $link }}" class="mt-auto pb-2">
                <span
                    class="text-warna-01 bg-white-01 mt-auto items-end rounded-md p-2 text-center text-sm font-normal">Kunjungi
                    Website</span>
            </a>
        @endif
    </div>
</div>
