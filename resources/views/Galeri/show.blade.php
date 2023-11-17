@extends('template-dashboard')
@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <a href="{{route('dashboard.kompetensi')}}" class="btn btn-danger mb-5"><i class="fa fa-angle-left"></i> Kembali</a>
            <div class="d-flex flex-row gap-5">
                <img src="{{ asset('storage/' . $galeri->foto_galeri) }}" style="width:200px" alt="">
                <div class="flex-column" style="width: 100%">
                    <div class="row">
                        <div class="col-2">Nama Kegiatan</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $galeri->nama_kegiatan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Keterangan</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $galeri->keterangan }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
