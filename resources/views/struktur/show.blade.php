@extends('template-dashboard')
@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <a href="{{route('dashboard.struktur')}}" class="btn btn-danger mb-5"><i class="fa fa-angle-left"></i> Kembali</a>
            <div class="d-flex flex-row gap-5">
                <img src="{{ asset('storage/' . $struktur->foto_struktur) }}" style="width:200px" alt="">
                <div class="flex-column" style="width: 100%">
                    <div class="row">
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
