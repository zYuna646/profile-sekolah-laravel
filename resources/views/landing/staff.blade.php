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
                        class="card-img-top mx-auto" style="width: 200px">
                    <div class="card-body">
                        <h3>Suleman Mayang M.Pd</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- WAKASEK --}}
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 justify-content-center g-3">
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Wakasek <br> Kurikulum</h5>
                    </div>
                    <img src="assets/img/wakasek kurikulum.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Nurain Djafar M.pd</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Wakasek <br> Humas</h5>
                    </div>
                    <img src="assets/img/wakasek humas rill.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Nurhayati Bau S.Pd</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Wakasek <br> Sarana Prasarana</h5>
                    </div>
                    <img src="assets/img/wakasek sarana.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Nikswanto Hapulu. S.Pd. M.pd</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Wakasek <br> Kesiswaan</h5>
                    </div>
                    <img src="assets/img/wakasek kesiswaan.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>zubaeda uno.s.Pd. M.pD</h3>
                    </div>
                </div>
            </div>
            <div class="col">    
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Kepala <br> Tata Usaha</h5>
                    </div>
                    <img src="assets/img/Kepala TU Ramli Saleh S.pd.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Ramli Saleh, s.pd</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Ketua program keahlian <br>ATR dan ATU </h5>
                    </div>
                    <img src="assets/img/Ketua Program Keahlian ATU ATR.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Sumarno, S.PT</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Ketua program keahlian <br> APHP </h5>
                    </div>
                    <img src="assets/img/Kajur APHP.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Selvianan Idrus, S.Pd</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Ketua program keahlian <br> TKJ </h5>
                    </div>
                    <img src="assets/img/Kajur TKJ.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Agustiana. S.Kom</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Ketua program keahlian <br> ATPH</h5>
                    </div>
                    <img src="assets/img/Kajur ATPH.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Kosahih. S.Pd</h3>
                    </div>
                </div>
            </div>
            

            <!---Kelompok Kerja--->
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Pembina OSIS </h5>
                    </div>
                    <img src="assets/img/Pembina OSIS.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Tri Susanti Jasin. S.pD</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Pembina Pramuka</h5>
                    </div>
                    <img src="assets/img/Pembina Pramuka.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Yunita Ahmad. S.pD</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Pembina UKS</h5>
                    </div>
                    <img src="assets/img/Pembina UKS.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Yuwinda Igirisa. S.pD</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Koordinator Perpustakaan</h5>
                    </div>
                    <img src="assets/img/Koordinator Perpustakaan.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Lisna Bau. S.pD</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Koordinator BK</h5>
                    </div>
                    <img src="assets/img/Koordinator BK.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Nova Pontoiyo. S.pD</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Koordinator Bengel ATR</h5>
                    </div>
                    <img src="assets/img/Koordinator Bengek ATR.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Rahma Saleh. S.pD</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>KURIKULUM KBM</h5>
                    </div>
                    <img src="assets/img/kURIKULUM KBM.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Maryam Djafar. S.pD</h3>
                    </div>
                </div>
            </div>

            <!-----Kepala Unit Kegiatan-->
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Kepala Bengkel TKJ </h5>
                    </div>
                    <img src="assets/img/Kepala Bengkel TKJ.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Umusalam Jumna R Iberahim, S.Pd</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Kepala Lab IPA </h5>
                    </div>
                    <img src="assets/img/Kepala Lab Ipa.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>tri susanti jasin. S.pD</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Kepala LAB Pendidian Agama Islam </h5>
                    </div>
                    <img src="assets/img/Kepala Lab PAI.jpg" alt="" class="mx-auto card-img-top">
                    <div class="card-body text-center">
                        <h3>Syukrin Alimullah. S.Pd</h3>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    
    
    

    {{-- Staff Dewan Guru --}}
@endsection
