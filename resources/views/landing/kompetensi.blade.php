@extends('template-landing')

@section('content')
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
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <div class="col d-flex">
                <div class="  card border-kompetensi">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-computer fa-2xl mb-5 mt-4" style="color: #D37E00"></i>
                        <h4 class="card-title">Agribisnis Tanaman Pangan Dan Hortikultura (ATPH)</h4>
                        <p class="card-text">Program Keahlian Agribisnis Tanaman mempelajari produksi tanaman pangan,
                            hortikultura, perkebunan, dan perbenihan. Pada awal pembelajaran peserta didik dikenalkan pada
                            pentingnya pertanian bagi ketersediaan pangan, peluang pasar, dan usaha agribisnis tanaman,
                            tantangan perubahan iklim global, juga peluang kerja di industri agribisnis tanaman, serta
                            konsentrasi- konsentrasi keahlian yang dapat dipelajari di kelas XI dan XII</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card border-kompetensi">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-computer fa-2xl mb-5 mt-4" style="color: #D37E00"></i>
                        <h4 class="card-title">Agribisnis Ternak Ruminansia (ATR)</h4>
                        <p class="card-text">Program Keahlian Agribisnis Ternak ini memuat pengetahuan, keterampilan, dan
                            sikap kerja yang diperlukan dalam memahami secara komprehensif profil industri, profesi atau
                            pekerjaan, dan peluang usaha pada industri peternakan. Pada awal pembelajaran peserta didik
                            dikenalkan kepada lapangan kerja, jabatan kerja, dan peluang usaha yang dapat dimasuki setelah
                            lulus, serta konsentrasi keahlian yang dapat dipelajari di kelas XI dan XII untuk menumbuhkan
                            passion (renjana), vision (visi), imajinasi, dan kreativitas </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class=" card border-kompetensi">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-computer fa-2xl mb-5 mt-4" style="color: #D37E00"></i>
                        <h4 class="card-title">Agribisnis Pengolahan Hasil Pertanian (APHP)</h4>
                        <p class="card-text">Pembelajaran di program Keahlian Agriteknologi Pengolahan Hasil Pertanian
                            berisi pengetahuan, keterampilan, dan sikap yang diperlukan dalam industri penanganan komoditas
                            hasil pertanian, proses-proses pada pengolahan hasil pertanian, dan dasar teknik kerja di
                            laboratorium dan pengemasan, penyimpanan dan pengujian mutu hasil pertanian.Materi pembelajaran
                            di Program Keahlian Agriteknologi Pengolahan Hasil Pertanian memuat soft skills dan hard skills
                            untuk mengembangkan kapasitas peserta didik memiliki keahlian pada bidang pengolahan dan
                            pengawasan mutu hasil pertanian, bernalar kritis, mandiri, kreatif dan adaptif. </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class=" card border-kompetensi">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-computer fa-2xl mb-5 mt-4" style="color: #D37E00"></i>
                        <h4 class="card-title">Agribisnis Ternak Unggas (ATU)</h4>
                        <p class="card-text">Program Keahlian Agribisnis Ternak ini memuat pengetahuan, keterampilan, dan
                            sikap kerja yang diperlukan dalam memahami secara komprehensif profil industri, profesi atau
                            pekerjaan, dan peluang usaha pada industri peternakan. Pada awal pembelajaran peserta didik
                            dikenalkan kepada lapangan kerja, jabatan kerja, dan peluang usaha yang dapat dimasuki setelah
                            lulus, serta konsentrasi keahlian yang dapat dipelajari di kelas XI dan XII untuk menumbuhkan
                            passion (renjana), vision (visi), imajinasi, dan kreativitas </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card border-kompetensi">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-computer fa-2xl mb-5 mt-4" style="color: #D37E00"></i>
                        <h4 class="card-title">Teknologi Komputer dan Jaringan (TKJ)</h4>
                        <p class="card-text">Program Keahlian Teknik Komputer dan Jaringan memiliki elemen materi sebagai
                            berikut: Proses bisnis di bidang Teknik Komputer dan Jaringan, Wawasan perkembangan bidang
                            Teknik Komputer dan Jaringan, Entrepreneurship dan job- profile di bidang Teknik Komputer dan
                            Jaringan, Orientasi dasar Teknik Komputer dan Jaringan, Media dan Jaringan Telekomunikasi, dan
                            Alat Ukur. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center p-2">
         <button class="btn btn-warning"><a href="{{route('isi')}}">Pelajari Lebih lanjut</a></button>
         
    </div>
@endsection
