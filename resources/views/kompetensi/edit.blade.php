@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Edit Kompetensi Keahlian</h2>
            <form method="post" action="{{route('dashboard.kompetensi.update', $data->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row mb-2">
                    <label for="nama_jurusan" class="col-sm-2 col-form-label mx-1">Nama Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form form-control" name="nama" value="{{$data->nama}}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="inputPassword3" class="col-sm-2 col-form-label mx-1">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="deskripsi" rows="5">{{$data->deskripsi}}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-5">
                    <fieldset class="form-group">
                        <label for="inputPassword3" class="col-sm-2 col-form-label ">Foto Kompetensi</label>
                        <div class="col-sm-10 my-2">
                            <input type="file" class="form-control-file" name="foto_kompetensi" id="foto_kompetensi">
                        </div>
                    </fieldset>
                    <img class="w-25" id="foto_preview" src="{{asset('storage/'.$data->foto_kompetensi)}}" alt="{{asset('storage/'.$data->foto_kompetensi)}}">
                </div>
                <div class="row">
                    <div class="col-auto">
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk fa-lg me-1"></i> Simpan</button>
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
