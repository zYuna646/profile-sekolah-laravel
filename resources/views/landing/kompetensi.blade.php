@extends('template-landing')

@section('content')
    {{-- @dd($komp_data) --}}
    <div class="container col-xxl-8 px-4 pt-5">
        <div class="row flex-lg-row-reverse align-items-center justify-content-evenly g-1 pt-5 mt-auto w-100">
            <div class="col-lg-7 text-center">
                <h1 class="display-5 fw-bold lh-1 mb-3">KOMPETENSI KEAHLIAN <br> <span style="color: #D37E00">SMK NEGERI MODEL
                        GORONTALO</span></h1>
            </div>
        </div>
    </div>
    <hr class="mx-5 bg-danger border-5 border-top border-dark">


    <div class="container px-5">
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            @foreach ($komp_data as $item)
                <div class="col d-flex">
                    <div class="card border-kompetensi">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-computer fa-2xl mb-5 mt-4" style="color: #D37E00"></i>
                            <h4 class="card-title">{{ $item->nama }}</h4>
                            <p class="card-text">{{ Str::limit($item->deskripsi, 100) . '...' }}</p>
                        </div>
                        <div class="card-footer border-0 bg-white">
                            <div class="d-grid mx-auto p-4">
                                <a href="{{route('detail-kompetensi', $item->id)}}" class="btn rounded-pill btn-pelajari">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection