<div class="drop-shadow-01 flex h-full w-full flex-col gap-2 rounded-md border bg-white p-2">
    <div class="group overflow-hidden rounded bg-gray-200">
        <img src="{{ asset('portfolio-files/interior/' . $thumbnail) }}"
            class="w-full object-contain duration-500 ease-in-out group-hover:scale-110 aspect-video">
    </div>
    <div class="flex flex-col">
        <p class="text-warna-03 text-sm">{{ $judul }}</p>
        <p class="text-black-45 text-sm font-normal">{{ $deskripsi }}</p>
        @if ($link != '')
            <a href="{{ $link }}"
                class=" text-warna-01 bg-white-01 mt-auto items-end rounded-md p-2 text-center text-sm font-normal">
                <span class="">
                    Click to Virtual Tour</span>
            </a>
        @endif
    </div>
</div>
