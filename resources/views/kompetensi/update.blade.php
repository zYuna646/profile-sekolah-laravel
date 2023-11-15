@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Tambah Kompetensi Keahlian</h2>
            <form>
                <div class="form-group row">
                    <label for="nama_jurusan" class="col-sm-2 col-form-label mx-1">Nama Jurusan</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Jurusan</option>
                            <option value="1">Agribisnis Tanaman Pangan Dan Hortikultura (ATPH)</option>
                            <option value="1">Agribisnis Ternak Ruminansia (ATR)</option>
                            <option value="1">Agribisnis Pengolahan Hasil Pertanian (APHP)</option>
                            <option value="2">Agribisnis Ternak Unggas (ATU)</option>
                            <option value="3">Teknologi Komputer dan Jaringan (TKJ)
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label mx-1">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="deskripsi" rows="5"></textarea>
                    </div>
                    <fieldset class="form-group">
                        <label for="inputPassword3" class="col-sm-2 col-form-label ">Foto Kompetensi</label>
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
