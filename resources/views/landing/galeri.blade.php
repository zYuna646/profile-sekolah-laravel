@extends('template-landing')

@section('content')
    <div class="container col-xxl-8 px-4 pt-5">
        <div class="row flex-lg-row-reverse align-items-center justify-content-evenly g-1 pt-5 mt-auto w-100">
            <div class="col-lg-7 text-center">
                <h1 class="display-5 fw-bold lh-1 mb-3">GALERI KEGIATAN <br> <span style="color: #D37E00">SMK NEGERI MODEL
                        GORONTALO</span></h1>
            </div>
        </div>
    </div>
    <hr class="mx-5 bg-danger border-5 border-top border-dark">

    <div class="container mb-5">
        <div class="d-flex flex-wrap gap-2">
            <div class="card" style="width: 300px; height:450px">
                <img src="assets/img/kegiatan 1.jpeg" alt="" class="card-img-top w-100 object-fit-cover" style="height: 200px">
                <div class="card-body text-center">
                    <h2>Kegiatan 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci rem et cum accusantium ipsa dolorum
                        corporis iusto porro? Blanditiis est aperiam sint, minima ipsa maiores!</p>
                </div>
            </div>
            <div class="card" style="width: 300px; height:450px">
                <img src="assets/img/kegiatan 2.jpeg" alt="" class="card-img-top w-100 object-fit-cover" style="height: 200px">
                <div class="card-body text-center">
                    <h2>Kegiatan 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci rem et cum accusantium ipsa dolorum
                        corporis iusto porro? Blanditiis est aperiam sint, minima ipsa maiores!</p>
                </div>
            </div>
            <div class="card" style="width: 300px; height:450px">
                <img src="assets/img/kegiatan 3.jpeg" alt="" class="card-img-top w-100 object-fit-cover" style="height: 200px">
                <div class="card-body text-center">
                    <h2>Kegiatan 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci rem et cum accusantium ipsa dolorum
                        corporis iusto porro? Blanditiis est aperiam sint, minima ipsa maiores!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
