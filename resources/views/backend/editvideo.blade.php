@extends('backend.component.template')
@section('content')
    <div class="my-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah">
            Tambah
        </button>
    </div>

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <td>Judul</td>
                <td>Thumbnail</td>
                <td>Link</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($videos as $video)
                <tr>
                    <td>{{ $video->judul }}</td>
                    <td>
                        <img src="{{ asset('portfolio-files/video/' . $video->thumbnail) }}"
                            class="img-thumbnail"style="height: 50px">
                    </td>
                    <td>
                        <a href="{!! $video->file !!}" target="blank">{!! $video->file !!}</a>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $video->id }}">Update</button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                            data-bs-target="#delete">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Modal Tambah --}}
    <div class="modal fade" id="modaltambah" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" enctype="multipart/form-data" method="POST" action="/admin/editvideo/tambah">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah video Grafis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label>Judul</label>
                    <input type="text" class="form-control mb-2" placeholder="Judul" name="judul">
                    <br>
                    <label>Link</label>
                    <input type="text" class="form-control mb-2" placeholder="File" name="file">
                    <br>
                    <label>Thumbnail</label>
                    <input type="file" class="form-control mb-2" placeholder="Thumbnail" name="thumbnail">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal Update --}}
    @foreach ($videos as $video)
        <div class="modal fade" id="modal-{{ $video->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" enctype="multipart/form-data" method="POST"
                    action="/admin/editvideo/ubah/{{ $video->id }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $video->id }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Desain Grafis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label>Judul</label>
                        <input type="text" class="form-control mb-2" name="judul" value="{{ $video->judul }}">
                        <label>Link</label>
                        <input type="text" class="form-control mb-2" name="file" value="{{ $video->file }}">
                        <label>Thumbnail</label>
                        <input type="file" class="form-control mb-2" name="thumbnail">
                        <input type="hidden" name="thumbnail_lama" value="{{ $video->thumbnail }}">
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
    @foreach ($videos as $video)
        <div class="modal fade" tabindex="-1" id="delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin hapus file {{ $video->judul }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="{{ url('admin/editvideo/hapus/' . $video->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
