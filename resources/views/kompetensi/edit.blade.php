@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Edit Kompetensi Keahlian</h2>
            <form method="post" action="{{ route('dashboard.kompetensi.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row mb-2">
                    <label for="nama_jurusan" class="col-sm-2 col-form-label mx-1">Nama Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form form-control" name="nama" value="{{ $data->nama }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="inputPassword3" class="col-sm-2 col-form-label mx-1">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="deskripsi" rows="5">{{ $data->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-5">
                    <fieldset class="form-group">
                        <label for="inputPassword3" class="col-sm-2 col-form-label ">Foto Kompetensi</label>
                        <div class="col-sm-10 my-2">
                            <input type="file" class="form-control-file" name="foto_kompetensi[]" id="foto_kompetensi"
                                multiple>
                        </div>
                    </fieldset>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk fa-lg me-1"></i>
                            Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Daftar Galeri</h2>
            <div class="d-flex flex-wrap gap-3">
                @foreach ($detail as $item)
                    <div class="card" style="width: 300px;">
                        <img src="{{ asset('storage/' . $item->nama_foto_kompetensi) }}" alt="Image"
                            class="card-img-top w-100 object-fit-cover" style="height: 200px">
                        <div class="card-body text-center">
                            <form action="{{ route('dashboard.kompetensi.destroyDetail', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger mt-2">Hapus</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <script>
        document.getElementById('foto_kompetensi').onchange = function(evt) {
            const [file] = this.files
            if (file) {
                // if there is an image, create a preview in featured_image_preview
                document.getElementById('foto_preview').src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
