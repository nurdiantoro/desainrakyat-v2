@include('backend/component/header')
@include('backend/component/navbar')

<div class="my-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah
    </button>
</div>

<div class="row">
    <?php foreach ($desains as $desain) { ?>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="/portfolio-files/<?= $desain->file ?>" style="object-fit: contain; height: 200px">
                <div class="card-body">
                    <span class=""><?= $desain->judul ?></span><br>
                    <span class=""><?= $desain->kategori ?></span>
                </div>
                <div class="row p-2">
                    <div class="col-md-6">
                        <button href="/admin/desaingrafis/edit&id=<?= $desain->id ?>" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#modal-<?= $desain->id ?>">Edit</button>
                    </div>
                    <div class="col-md-6">
                        <a href="/admin/desaingrafis/hapus/<?= $desain->id ?>" class="btn btn-danger w-100">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

{{-- Modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" enctype="multipart/form-data" method="POST" action="/admin/desaingrafis/tambah">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Desain Grafis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Judul" name="judul">
                <input type="file" class="form-control mb-2" id="exampleFormControlInput1" placeholder="File" name="file">
                <select class="form-select" aria-label="Default select example" name="kategori">
                    <option selected disabled>Kategori</option>
                    <option value="Logo">Logo</option>
                    <option value="Banner & Poster">Banner & Poster</option>
                    <option value="Vector Art">Vector Art</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>

<?php foreach ($desains as $desain) { ?>
    <div class="modal fade" id="modal-<?= $desain->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" enctype="multipart/form-data" method="POST" action="/admin/desaingrafis/ubah/<?=$desain->id?>">
                @csrf
                <input type="text" name="id" value="<?= $desain->id ?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Desain Grafis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Judul" name="judul" value="<?= $desain->judul ?>">
                    <input type="file" class="form-control mb-2" id="exampleFormControlInput1" placeholder="File" name="file">
                    <input type="hidden" name="file-lama" value="<?= $desain->file ?>">
                    <select class="form-select" aria-label="Default select example" name="kategori">
                        <option value="<?= $desain->kategori ?>"><?= $desain->kategori ?></option>
                        <option disabled>Kategori</option>
                        <option value="Logo">Logo</option>
                        <option value="Banner & Poster">Banner & Poster</option>
                        <option value="Vector Art">Vector Art</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
<?php } ?>

@include('backend.component.footer')
