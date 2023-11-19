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
            @if ($kepalaSekolah)
                <div class="col-auto mx-auto text-center">
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ $kepalaSekolah->jabatan }}</h2>
                        </div>
                        <img src="{{ asset('storage/' . $kepalaSekolah->foto) }}" alt=""
                            class="card-img-top mx-auto" style="width: 200px">
                        <div class="card-body">
                            <h3>{{ $kepalaSekolah->nama }}</h3>
                            <h5>{{ $kepalaSekolah->nip }}</h5>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    {{-- WAKASEK --}}
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 justify-content-center g-3">
            @foreach ($staff as $item)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header text-center">
                            <h5>{{ $item->jabatan }}</h5>
                        </div>
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="" height="300"
                            class="mx-auto card-img-top object-fit-full">
                        <div class="card-body text-center">
                            <h3>{{ $item->nama }}</h3>
                            <h5>{{ $item->nip }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>





    {{-- Staff Dewan Guru --}}
@endsection
