@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Tambah Data Staff</h2>
            <form action="{{ route('dashboard.staff.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-grup row">
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label mx-1">Nama Staff</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama"cvalue="{{$data->nama}}>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_jurusan" class="col-sm-2 col-form-label mx-1">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-laki</option>
                        </select>
                    </div>
                </div>
                <div class="form-grup row">
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label mx-1">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jabatan" value="{{$data->jabatan}}">
                    </div>
                </div>
                <div class="form-group row mb-2 " >
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label mx-1">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nip" value="{{$data->nip}}">
                    </div>
                </div>
                <fieldset class="form-group">
                    <label for="inputPassword3" class="col-sm-2 col-form-label ">Foto Staff</label>
                    <div class="col-sm-10 my-2">
                        <input type="file" class="form-control-file" name="foto" value="{{$data->foto_}}">
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Kirim</button>
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
