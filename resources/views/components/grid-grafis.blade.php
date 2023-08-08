<div class="drop-shadow-01 w-full rounded-md border bg-white p-2">
    <div class="group mb-4 h-32 w-full overflow-hidden rounded bg-gray-200">
        <img src="{{ url('portfolio-files/' . $src) }}"
            class="h-full w-full object-contain duration-500 ease-in-out group-hover:scale-110"
            data-modal="{{ url('portfolio-files/' . $src) }}" onclick="openModal(this)">
    </div>
    <p class="text-warna-03 text-sm">{{ $judul }}</p>
    <p class="text-black-45 text-sm font-normal">{{ $kategori }}</p>
</div>
