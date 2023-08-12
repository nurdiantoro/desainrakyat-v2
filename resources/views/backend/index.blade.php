@extends('backend.component.template')

@section('content')
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <td>Thumbnail</td>
                <td>Judul</td>
                <td>Sub Judul</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($highlights as $highlight)
                <tr>
                    <td>
                        <img src="{{ asset('portfolio-files/highlight/' . $highlight->file) }}"
                            class="img-thumbnail"style="height: 50px">
                    </td>
                    <td>{{ $highlight->judul }}</td>
                    <td>{{ $highlight->subjudul }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $highlight->id }}">Update</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Modal Update --}}
    @foreach ($highlights as $highlight)
        <div class="modal fade" id="modal-{{ $highlight->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" enctype="multipart/form-data" method="POST"
                    action="/admin/highlight/ubah/{{ $highlight->id }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $highlight->id }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Desain Grafis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label>Judul</label>
                        <input type="text" class="form-control mb-2" name="judul" value="{{ $highlight->judul }}">
                        <label>Sub Judul</label>
                        <input type="text" class="form-control mb-2" name="subjudul" value="{{ $highlight->subjudul }}">
                        <label>File</label>
                        <input type="file" class="form-control mb-2" name="file">
                        <input type="hidden" name="file_lama" value="{{ $highlight->file }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
