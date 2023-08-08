@extends('backend.component.template')
@section('content')
    <div class="my-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah
        </button>
    </div>

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <td>Image</td>
                <td>Judul</td>
                <td>Kategori</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($desains as $desain)
                <tr>
                    <td>
                        <img src="{{ asset('portfolio-files/' . $desain->file) }}" class="img-thumbnail"style="height: 50px">
                    </td>
                    <td>{{ $desain->judul }}</td>
                    <td>{{ $desain->kategori }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $desain->id }}">Update</button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                            data-bs-target="#delete">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Modal Tambah --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" enctype="multipart/form-data" method="POST" action="/admin/desaingrafis/tambah">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Desain Grafis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Judul"
                        name="judul">
                    <input type="file" class="form-control mb-2" id="exampleFormControlInput1" placeholder="File"
                        name="file">
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

    {{-- Modal Update --}}
    @foreach ($desains as $desain)
        <div class="modal fade" id="modal-{{ $desain->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" enctype="multipart/form-data" method="POST"
                    action="/admin/desaingrafis/ubah/{{ $desain->id }}">
                    @csrf
                    <input type="text" name="id" value="{{ $desain->id }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Desain Grafis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Judul"
                            name="judul" value="{{ $desain->judul }}">
                        <input type="file" class="form-control mb-2" id="exampleFormControlInput1" placeholder="File"
                            name="file">
                        <input type="hidden" name="file_lama" value="{{ $desain->file }}">
                        <select class="form-select" aria-label="Default select example" name="kategori">
                            <option value="{{ $desain->kategori }}">{{ $desain->kategori }}</option>
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
    @endforeach

    {{-- Modal Delete --}}
    @foreach ($desains as $desain)
        <div class="modal fade" tabindex="-1" id="delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin hapus file {{ $desain->judul }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="{{ url('admin/desaingrafis/hapus/' . $desain->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
