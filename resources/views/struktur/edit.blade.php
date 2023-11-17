@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Tambah struktur Organisasi</h2>
            <form action="{{ route('dashboard.struktur.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="form-group">
                    <label for="inputPassword3" class="col-sm-2 col-form-label ">Foto Struktur</label>
                    <div class="col-sm-10 my-2">
                        <input type="file" class="form-control-file" name="foto_struktur" value="{{$data->foto_struktur}}">
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
        document.getElementById('foto_strukutr').onchange = function(evt) {
            const [file] = this.files
            if (file) {
                // if there is an image, create a preview in featured_image_preview
                document.getElementById('foto_preview').src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
