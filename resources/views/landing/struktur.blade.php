@extends('template-landing')

@section('content')
    <div class="container col-xxl-8 px-4 pt-5">
        <div class="row flex-lg-row-reverse align-items-center justify-content-evenly g-1 pt-5 mt-auto w-100">
            <div class="col-lg-7 text-center">
                <h1 class="display-5 fw-bold lh-1 mb-3"> STRUKTUR ORGANISASI <br> <span style="color: #D37E00">SMK NEGERI
                        MODEL
                        GORONTALO</span></h1>
            </div>
        </div>
    </div>
    <hr class="mx-5 bg-danger border-5 border-top border-dark ">
    <div class="container-fluid align-center d-block justify-content-center d-flex ">
        @if ($struktur)
            <img src="{{ asset('storage/' . $struktur->foto_struktur) }}" alt="" srcset="" style="width:1450px">
        @endif
    </div>
@endsection
