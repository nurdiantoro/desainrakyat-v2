@extends('backend.component.template')
@section('content')
    <div class="my-4">
        <a href="{{ url('admin/interior') }}" class="btn btn-secondary">
            Back
        </a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah
        </button>
    </div>
    <h3>{{ $interior->judul }}</h3>

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <td>Image</td>
                <td>Nama Image</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
                <tr>
                    <td>
                        <img src="{{ asset('portfolio-files/interior/' . $image->image) }}"
                            class="img-thumbnail"style="height: 50px">
                    </td>
                    <td>{{ $image->image }}</td>
                    <td>
                        <a href="{{ url('admin/interiordetail/hapus/' . $image->id) }}"
                            class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Modal Tambah --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" enctype="multipart/form-data" method="POST" action="/admin/interiordetail/tambah">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah interior</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" value="{{ $interior->id }}" name="id_interior">
                    <label>Image</label>
                    <input type="file" class="form-control mb-2" placeholder="File" name="image">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
