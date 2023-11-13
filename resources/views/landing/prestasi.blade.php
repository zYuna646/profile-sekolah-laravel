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
            <div class="card" style="width: 300px; height:450px">
                <img src="assets/img/Nabil Buato.jpg" alt="" class="card-img-top w-100 object-fit-cover" style="height: 200px">
                <div class="card-body text-center">
                    <h2>Prestasi Nasional</h2>
                    <p>Peserta Raimuna Nasional di Cibubur</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus unde magnam quaerat suscipit! Sapiente, magni! </p>
                </div>
            </div>
            <div class="card" style="width: 300px; height:450px">
                <img src="assets/img/Dimas Purnomo.jpg" alt="" class="card-img-top w-100 object-fit-cover" style="height: 200px">
                <div class="card-body text-center">
                    <h2>Prestasi regional</h2>
                    <p>RU Putra batik</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sunt molestias sit alias eveniet doloremque, vero quaerat ea! </p>
                </div>
            </div>
            <div class="card" style="width: 300px; height:450px">
                <img src="assets/img/Ferdiansyah Nusi.jpg" alt="" class="card-img-top w-100 object-fit-fill" style="height: 200px">
                <div class="card-body text-center">
                    <h2>Prestasi Nasional</h2>
                    <p>Juara 3 O2SN Cabang Atletik</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint minus dolores mollitia harum nostrum dolor veniam  provident!</p>
                </div>
            </div>
            <div class="card" style="width: 300px; height:450px">
                <img src="assets/img/Kurnia.jpg" alt="" class="card-img-top w-100 object-fit-cover" style="height: 200px">
                <div class="card-body text-center">
                    <h2>Prestasi Regional</h2>
                    <p>Praskibraka 17 Agustus 2023</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mollitia harum nostrum dolor veniam deserunt provident</p>
                </div>
            </div>
        </div>
    </div>
@endsection
