@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Edit E Rapor</h2>
            <form method="post" action="{{ route('dashboard-guru.erapor.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row mb-2">
                    <label for="link" class="col-sm-2 col-form-label mx-1">Link E Rapor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form form-control" name="link" value="{{ $data->link }}">
                    </div>
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
