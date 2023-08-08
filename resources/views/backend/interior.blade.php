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
                <td>Thumbnail</td>
                <td>Judul</td>
                <td>Link</td>
                <td>Deskripsi</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($interiors as $interior)
                <tr>
                    <td>
                        <img src="{{ asset('portfolio-files/interior/' . $interior->thumbnail) }}"
                            class="img-thumbnail"style="height: 50px">
                    </td>
                    <td>{{ $interior->judul }}</td>
                    <td>{{ $interior->link }}</td>
                    <td>{{ $interior->deskripsi }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $interior->id }}">Update</button>
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
            <form class="modal-content" enctype="multipart/form-data" method="POST" action="/admin/interior/tambah">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah interior</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label>Judul</label>
                    <input type="text" class="form-control mb-2" placeholder="Judul" name="judul">
                    <label>Thumbnail</label>
                    <input type="file" class="form-control mb-2" placeholder="File" name="thumbnail">
                    <label>Link</label>
                    <input type="text" class="form-control mb-2" placeholder="File" name="link">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control mb-2" cols="30" rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal Update --}}
    @foreach ($interiors as $interior)
        <div class="modal fade" id="modal-{{ $interior->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" enctype="multipart/form-data" method="POST"
                    action="/admin/interior/ubah/{{ $interior->id }}">
                    @csrf
                    <input type="text" name="id" value="{{ $interior->id }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Desain Grafis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label>Judul</label>
                        <input type="text" class="form-control mb-2" value="{{ $interior->judul }}" name="judul">
                        <label>Thumbnail</label>
                        <input type="file" class="form-control mb-2" name="thumbnail">
                        <input type="hidden" class="form-control mb-2" value="{{ $interior->thumbnail }}"
                            name="thumbnail_lama">
                        <label>Link</label>
                        <input type="text" class="form-control mb-2" value="{{ $interior->link }}" name="link">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control mb-2" cols="30" rows="10">{{ $interior->deskripsi }}</textarea>
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
    @foreach ($interiors as $interior)
        <div class="modal fade" tabindex="-1" id="delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin hapus file {{ $interior->judul }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="{{ url('admin/interior/hapus/' . $interior->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
