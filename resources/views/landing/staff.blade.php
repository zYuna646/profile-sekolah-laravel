@extends('template-landing')

@section('content')
    <div class="container col-xxl-8 px-4 pt-5">
        <div class="row flex-lg-row-reverse align-items-center justify-content-evenly g-1 pt-5 mt-auto w-100">
            <div class="col-lg-7 text-center">
                <h1 class=" fw-bold lh-1 mb-3">STAFF GURU & TATA USAHA <br> <span style="color: #D37E00">SMK NEGERI MODEL
                        GORONTALO</span></h1>
            </div>
        </div>
    </div>
    <hr class="mx-5 bg-danger border-5 border-top border-dark">
    {{-- Kepala Sekolah --}}
    <div class="container mb-3">
        <div class="d-flex flex-column justify-content-center">
            <div class="col-auto mx-auto text-center">
                <div class="card">
                    <div class="card-header">
                        <h2>Kepala Sekolah</h2>
                    </div>
                    <img src="assets/img/kepsek gapake nama dan latar belakang.png" alt=""
                        class="card-img-top mx-auto" style="width: 300px">
                    <div class="card-body">
                        <h3>Suleman Mayang M.Pd</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- WAKASEK --}}
    <div class="container-fluid">
        <div class="d-flex flex-wrap gap-2 justify-content-center">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Wakasek <br> Kurikulum</h2>
                </div>
                <img src="assets/img/wakasek humas rill.jpg" alt="" class="mx-auto" style="width: 300px">
                <div class="card-body text-center">
                    <h3>Nurhayati Bau S.Pd</h3>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">
                    <h2>Wakasek <br> Humas</h2>
                </div>
                <img src="assets/img/wakasek humas rill.jpg" alt="" class="mx-auto" style="width: 300px">
                <div class="card-body text-center">
                    <h3>Nurhayati Bau S.Pd</h3>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">
                    <h2>Wakasek <br> Sarana Prasarana</h2>
                </div>
                <img src="assets/img/wakasek humas rill.jpg" alt="" class="mx-auto" style="width: 300px">
                <div class="card-body text-center">
                    <h3>Nurhayati Bau S.Pd</h3>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">
                    <h2>Wakasek <br> Kesiswaan</h2>
                </div>
                <img src="assets/img/wakasek humas rill.jpg" alt="" class="mx-auto" style="width: 300px">
                <div class="card-body text-center">
                    <h3>Nurhayati Bau S.Pd</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- Staff Dewan Guru --}}
@endsection
