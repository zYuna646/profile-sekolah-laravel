@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Tambah Link E Rapor</h2>
            <form method="post" action="{{ route('dashboard-guru.erapor.store') }}">
                @csrf
                <div class="form-group row mb-2">
                    <label for="nama_jurusan" class="col-sm-2 col-form-label mx-1">Link E Rapor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form form-control" name="link">
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
@endsection
