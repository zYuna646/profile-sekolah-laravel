@extends('template-dashboard')
@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <a href="{{route('dashboard.prestasi')}}" class="btn btn-danger mb-5"><i class="fa fa-angle-left"></i> Kembali</a>
            <div class="d-flex flex-row gap-5">
                <img src="{{ asset('storage/' . $prestasi->foto_siswa) }}" style="width:200px" alt="">
                <div class="flex-column" style="width: 100%">
                    <div class="row">
                        <div class="col-2">Nama siswa</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $prestasi->nama_siswa }}</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Jenis Kelamin</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $prestasi->jenis_kelamin}}</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Keterangan</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $prestasi->keterangan }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
