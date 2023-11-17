@extends('template-dashboard')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body row align-items-center">
                    <div class="col-auto">
                        <i class="ti ti-book fa-2xl my-auto text-primary"></i>
                    </div>
                    <div class="col">
                        <h5 class="card-title">Jumlah Kompetensi</h5>
                        <h6>{{$komp}}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body row align-items-center">
                    <div class="col-auto">
                        <i class="fa-solid fa-users fa-2xl my-auto text-primary"></i>
                    </div>
                    <div class="col">
                        <h5 class="card-title">Jumlah Siswa</h5>
                        <h6>256</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body row align-items-center">
                    <div class="col-auto">
                        <i class="fa-solid fa-user fa-2xl my-auto text-primary"></i>
                    </div>
                    <div class="col">
                        <h5 class="card-title">Jumlah Staff</h5>
                        <h6>{{$staff}}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body row align-items-center">
                    <div class="col-auto">
                        <i class="fa-solid fa-trophy fa-2xl my-auto text-primary"></i>
                    </div>
                    <div class="col">
                        <h5 class="card-title">Jumlah Prestasi</h5>
                        <h6>{{$prestasi}}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body row align-items-center">
                    <div class="col-auto">
                        <i class="fa-solid fa-image fa-2xl my-auto text-primary"></i>
                    </div>
                    <div class="col">
                        <h5 class="card-title">Galeri Kegiatan</h5>
                        <h6>{{$galeri}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
