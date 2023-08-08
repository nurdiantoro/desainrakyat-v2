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
            @foreach ($webs as $web)
                <tr>
                    <td>
                        <img src="{{ asset('portfolio-files/web/' . $web->thumbnail) }}"
                            class="img-thumbnail"style="height: 50px">
                    </td>
                    <td>{{ $web->judul }}</td>
                    <td>{{ $web->link }}</td>
                    <td>{{ $web->deskripsi }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $web->id }}">Update</button>
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
            <form class="modal-content" enctype="multipart/form-data" method="POST" action="/admin/web/tambah">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Web</h5>
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
    @foreach ($webs as $web)
        <div class="modal fade" id="modal-{{ $web->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" enctype="multipart/form-data" method="POST"
                    action="/admin/web/ubah/{{ $web->id }}">
                    @csrf
                    <input type="text" name="id" value="{{ $web->id }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Desain Grafis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label>Judul</label>
                        <input type="text" class="form-control mb-2" value="{{ $web->judul }}" name="judul">
                        <label>Thumbnail</label>
                        <input type="file" class="form-control mb-2" name="thumbnail">
                        <input type="hidden" class="form-control mb-2" value="{{ $web->thumbnail }}" name="thumbnail_lama">
                        <label>Link</label>
                        <input type="text" class="form-control mb-2" value="{{ $web->link }}" name="link">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control mb-2" cols="30" rows="10">{{ $web->deskripsi }}</textarea>
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
    @foreach ($webs as $web)
        <div class="modal fade" tabindex="-1" id="delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin hapus file {{ $web->judul }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="{{ url('admin/web/hapus/' . $web->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
