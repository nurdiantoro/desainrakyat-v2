<div class="drop-shadow-01 flex h-full w-full flex-col gap-2 rounded-md border bg-white p-2">
    <div class="group mb-2 w-full overflow-hidden rounded bg-gray-200">
        <img src="{{ url('portfolio-files/grafis/' . $src) }}"
            class="w-full object-contain duration-500 ease-in-out group-hover:scale-110 aspect-video"
            onclick="openModal(this)">
    </div>
    <p class="text-warna-03 text-sm">{{ $judul }}</p>
    <p class="text-black-45 text-sm font-normal">{{ $kategori }}</p>
</div>
