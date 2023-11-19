@extends('template-landing')

@section('content')
    <div class="container col-xxl-8 px-4 pt-5">
        <div class="row flex-lg-row-reverse align-items-center justify-content-evenly g-1 pt-5 mt-auto w-100">
            <div class="col-lg-7 text-center">
                <h1 class="display-5 fw-bold lh-1 mb-3"> PRESTASI SISWA <br> <span style="color: #D37E00">SMK NEGERI MODEL
                        GORONTALO</span></h1>
            </div>
        </div>
    </div>
    <hr class="mx-5 bg-danger border-5 border-top border-dark">

    <div class="container mb-5">
        <div class="d-flex flex-wrap gap-2 justify-content-center">
            @foreach ($prestasi as $value => $item)
                <div class="card" style="width: 300px; height:350px">
                    <img src="{{ asset('storage/' . $item->foto_siswa) }}" alt=""
                        class="card-img-top w-100 object-fit-cover" style="height: 200px">
                    <div class="card-body text-center">
                        <h2>{{ $item->nama_siswa }}</h2>
                        <p>{{ $item->keterangan }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
