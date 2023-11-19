@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Edit Galeri Keahlian</h2>
            <form method="post" action="{{ route('dashboard.galeri.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-grup row">
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label mx-1">Nama Kegiatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_kegiatan" value="{{ $data->nama_kegiatan }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label mx-1">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="keterangan" rows="5">{{ $data->keterangan }}</textarea>
                    </div>
                    <fieldset class="form-group">
                        <label for="inputPassword3" class="col-sm-2 col-form-label ">Foto Kegiatan</label>
                        <div class="col-sm-10 my-2">
                            <input type="file" class="form-control-file" name="foto_galeri"
                                value="{{ $data->foto_galeri }}">
                        </div>
                </div>
                </fieldset>
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
