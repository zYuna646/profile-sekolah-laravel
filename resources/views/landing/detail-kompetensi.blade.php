@extends('template-landing')

@section('content')
    <div class="container col-xxl-8 px-4 pt-5">
        <div class="row flex-lg-row-reverse align-items-center justify-content-evenly g-1 pt-5 mt-auto w-100">
            <div class="col-lg-7 text-center">
                <h1 class="display-5 fw-bold lh-1 mb-3"><span style="color: #D37E00">SMK NEGERI MODEL
                        GORONTALO</span></h1>
            </div>
        </div>
    </div>
    <hr class="mx-5 bg-danger border-5 border-top border-dark">
    <div class="card col-sm-4 justify-content-center mx-auto" style="width: 75rem">
        <div class="card-body">
            <h1 class="display-5 fw-bold lh-1 mb-3"><span style="color: #D37E00">{{ $kompetensi->nama }}</span></h1>
            <p>{{ $kompetensi->deskripsi }}</p>
            <!--untuk tampilan kompetensi-->

            <h3 class="text-center mt-5">Galeri {{ $kompetensi->nama }}</h3>
            <hr class="mx-auto bg-danger border-5 border-top border-dark" style="width: 75rem">

            <div class="d-flex gap-3 flex-wrap justify-content-center">
                @foreach ($detail as $item)
                    <img src="{{ asset('storage/' . $item->nama_foto_kompetensi) }}"
                        class="rounded img-fluid object-fit-cover" style="width: 30rem" alt="">
                @endforeach

                {{-- <img src="{{ asset('assets/img/agrikultura/2.jpeg') }}" class="rounded img-fluid object-fit-scale"
                    style="width: 30rem" alt="">
                <img src="{{ asset('assets/img/agrikultura/3.jpeg') }}" class="rounded img-fluid object-fit-scale"
                    style="width: 30rem" alt="">
                <img src="{{ asset('assets/img/agrikultura/4.jpeg') }}" class="rounded img-fluid object-fit-scale"
                    style="width: 30rem" alt="">
                <img src="{{ asset('assets/img/agrikultura/5.jpeg') }}" class="rounded img-fluid object-fit-scale"
                    style="width: 30rem" alt="">
                <img src="{{ asset('assets/img/agrikultura/6.jpeg') }}" class="rounded img-fluid object-fit-scale"
                    style="width: 30rem" alt="">
                <img src="{{ asset('assets/img/agrikultura/7.jpeg') }}" class="rounded img-fluid object-fit-scale"
                    style="width: 30rem" alt=""> --}}
            </div>
        </div>

    </div>
    </div>
@endsection
