@extends('template-dashboard')
@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <a href="{{route('dashboard.kompetensi')}}" class="btn btn-danger mb-5"><i class="fa fa-angle-left"></i> Kembali</a>
            <div class="d-flex flex-row gap-5">
                <img src="{{ asset('storage/' . $kompetensi->foto_kompetensi) }}" style="width:200px" alt="">
                <div class="flex-column" style="width: 100%">
                    <div class="row">
                        <div class="col-2">Nama</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $kompetensi->nama }}</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Deskripsi</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $kompetensi->deskripsi }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
