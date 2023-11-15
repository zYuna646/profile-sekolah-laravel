@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Tambah Data Staff</h2>
            <form>
                <div class="form-grup row">
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label mx-1">Nama Staff</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_siswa">
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="nama_jurusan" class="col-sm-2 col-form-label mx-1">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="1">Perempuan</option>
                            <option value="1">Laki-laki</option>
                        </select>
                    </div>
                </div>
                <div class="form-grup row">
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label mx-1">NIP</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nip">
                    </div>
                  </div>
                    <fieldset class="form-group">
                        <label for="inputPassword3" class="col-sm-2 col-form-label ">Foto Staff</label>
                        <div class="col-sm-10 my-2">
                            <input type="file" class="form-control-file" id="foto_kompetensi">
                        </div>
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
@endsection
