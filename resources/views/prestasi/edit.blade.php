@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Edit Prestasi</h2>
            <form method="post" action="{{ route('dashboard.prestasi.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group row mb-2">
                    <label for="nama_jurusan" class="col-sm-2 col-form-label mx-1">Nama siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form form-control" name="nama" value="{{ $data->nama_siswa }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label mx-1">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin"
                            value="{{ $data->jenis_kelamin }}">
                            <option selected>Pilih</option>
                            <option {{ $data->jenis_kelamin == 'P' ? 'selected' : '' }} value="P">Perempuan</option>
                            <option {{ $data->jenis_kelamin == 'L' ? 'selected' : '' }} value="L">Laki-laki</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="inputPassword3" class="col-sm-2 col-form-label mx-1">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="keterangan" rows="5">{{ $data->keterangan }}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-5">
                    <fieldset class="form-group">
                        <label for="inputPassword3" class="col-sm-2 col-form-label ">Foto Siswa</label>
                        <div class="col-sm-10 my-2">
                            <input type="file" class="form-control-file" name="foto_siswa" id="foto_kompetensi">
                        </div>
                    </fieldset>
                    <img class="w-25" id="foto_preview" src="{{ asset('storage/' . $data->foto_siswa) }}"
                        alt="{{ asset('storage/' . $data->foto_siswa) }}">
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
