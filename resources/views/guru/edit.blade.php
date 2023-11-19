@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Edit Pengguna</h2>
            <form method="post" action="{{ route('dashboard.guru.update', $data->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row mb-2">
                    <label for="name" class="col-sm-2 col-form-label mx-1">Nama Pengguna</label>
                    <div class="col-sm-10">
                        <input type="text" class="form form-control" name="name" value="{{ $data->name }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="email" class="col-sm-2 col-form-label mx-1">Email Pengguna</label>
                    <div class="col-sm-10">
                        <input type="email" class="form form-control" name="email" value="{{ $data->email }}">
                    </div>
                </div>
                <div class="form-group
                            row mb-2">
                    <label for="password" class="col-sm-2 col-form-label mx-1">Password Pengguna</label>
                    <div class="col-sm-10">
                        <input type="text" class="form form-control" name="password">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="role" class="col-sm-2 col-form-label mx-1">Role</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="role" aria-label="Default select example">
                            <option>Pilih Role</option>
                            <option {{ $data->role == 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                            <option {{ $data->role == 'guru' ? 'selected' : '' }} value="guru">Guru</option>
                        </select>
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
