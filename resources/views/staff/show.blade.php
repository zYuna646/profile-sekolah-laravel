@extends('template-dashboard')
@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <a href="{{route('dashboard.staff')}}" class="btn btn-danger mb-5"><i class="fa fa-angle-left"></i> Kembali</a>
            <div class="d-flex flex-row gap-5">
                <img src="{{ asset('storage/' . $staff->foto) }}" style="width:200px" alt="">
                <div class="flex-column" style="width: 100%">
                    <div class="row">
                        <div class="col-2">Nama</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $staff->nama }}</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Jenis Kelamin</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $staff->jenis_kelamin }}</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Jabatan</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $staff->jabatan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-2">NIP</div>
                        <div class="col-auto">:</div>
                        <div class="col">{{ $staff->nip }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
