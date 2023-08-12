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
                <th>Nama</th>
                <th>Foto</th>
                <th>Review By</th>
                <th>Review</th>
                <th width="20%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <td>{{ $review->nama }}</td>
                    <td>
                        <img src="{{ asset('portfolio-files/review/' . $review->foto) }}"
                            class="img-thumbnail"style="height: 50px">
                    </td>
                    <td>{{ $review->review_by }}</td>
                    <td>{{ $review->review }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $review->id }}">Update</button>
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
            <form class="modal-content" enctype="multipart/form-data" method="POST" action="/admin/review/tambah">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label>Nama</label>
                    <input type="text" class="form-control mb-2" placeholder="Judul" name="nama">
                    <label>Foto</label><small class="text-danger">*Max 720px X 720px atau dibawah 500kb</small>
                    <input type="file" class="form-control mb-2" placeholder="File" name="foto">
                    <label>Review By</label>
                    <select class="form-select" name="review_by">
                        <option selected disabled>Kategori</option>
                        <option value="by Tokopedia">by Tokopedia</option>
                        <option value="by WhatsApp">by WhatsApp</option>
                    </select>
                    <label>Review</label>
                    <textarea name="review" class="form-control mb-2" rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal Update --}}
    @foreach ($reviews as $review)
        <div class="modal fade" id="modal-{{ $review->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" enctype="multipart/form-data" method="POST"
                    action="/admin/review/ubah/{{ $review->id }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $review->id }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label>Nama</label>
                        <input type="text" class="form-control mb-2" value="{{ $review->nama }}" name="nama">
                        <label>Foto</label><small class="text-danger">*Max 720px X 720px atau dibawah 500kb</small>
                        <input type="file" class="form-control mb-2" name="foto">
                        <input type="hidden" class="form-control mb-2" value="{{ $review->foto }}" name="foto_lama">
                        <label>Link</label>
                        <select class="form-select" name="review_by">
                            <option selected value="{{ $review->review_by }}">{{ $review->review_by }}</option>
                            <option disabled>Kategori</option>
                            <option value="by Tokopedia">by Tokopedia</option>
                            <option value="by WhatsApp">by WhatsApp</option>
                        </select>
                        <label>Review</label>
                        <textarea name="review" class="form-control mb-2" rows="10">{{ $review->review }}</textarea>
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
    @foreach ($reviews as $review)
        <div class="modal fade" tabindex="-1" id="delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin hapus review {{ $review->nama }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="{{ url('admin/review/hapus/' . $review->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
