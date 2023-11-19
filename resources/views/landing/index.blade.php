@extends('template-landing')

@section('content')
    <section class="hero bg-light">
        <div class="container col-xxl-8 px-4 py-5" style="height: 100vh;">
            <div class="row flex-lg-row-reverse align-items-center justify-content-evenly g-5 py-5">
                <div class="col-10 col-sm-12 col-lg-6">
                    <img src="assets/img/hero-full-cut.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                        width="1000" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold">Sistem Informasi</h3>
                    <h1 class="display-5 fw-bold lh-1 mb-3">SMK NEGERI <br> <span style="color: #D37E00">MODEL
                            GORONTALO</span></h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        world’s most popular front-end open source toolkit, featuring Sass variables and mixins,
                        responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    </div>
                </div>
            </div>
        </div>
        <!--countener punya-->
    </section>

    <div class="container-fluid pb-5 px-4 bg-light">
        <div class="row">
            <div class="col">
                <div class="rounded shadow p-4">
                    <div class="row gap-2">
                        <div class="col-auto d-flex align-item-center">
                            <i class="fa-solid fa-graduation-cap fa-2xl my-auto text-success"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h1>Jurusan</h1>
                            </div>
                            <div class="row">
                                <h2>5</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="rounded shadow p-4">
                    <div class="row gap-2">
                        <div class="col-auto d-flex align-item-center">
                            <i class="fa-solid fa-users fa-2xl my-auto text-primary"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h1>Siswa</h1>
                            </div>
                            <div class="row">
                                <h2>254</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="rounded shadow p-4">
                    <div class="row gap-2">
                        <div class="col-auto d-flex align-item-center">
                            <i class="fa-solid fa-user-graduate fa-2xl my-auto text-warning"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h1>Tim Pengajar</h1>
                            </div>
                            <div class="row">
                                <h2>34</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--- bagian banner -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/smamodel.jpeg" class="d-block w-100" alt="..."
                        style="height: 500px; object-fit:cover">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/kegiatan 2.jpeg" class="d-block w-100" alt="..."
                        style="height: 500px; object-fit:cover">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/kegiatan.jpeg" class="d-block w-100" alt="..."
                        style="height: 500px; object-fit:cover">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <script src="assets/js/bootstrap.min.js"></script>


    <div class="container-fluid py-5" style="background-color:  #D37E00;">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10 text-center mt-4 text-light">
                    <h3>Kenapa Harus Sekolah di <span class="text-warning"> SMKN Model Gorontalo </span> ?</h4>
                        <p>Alasan kenapa kalian harus bergabung di SMKN Model Gorontalo</p>

                </div>
            </div>
            <div class="row row-gap-2">
                <div class="col-lg-3">
                    <div class="rounded p-4 shadow" style="height:275px">
                        <div class="d-flex justify-content-center">
                            <img src="assets/img/Ellipse 208.png" alt=""
                                class="bg-light p-2 rounded-circle shadow-1" style="widht:50px">
                        </div>
                        <div class="text-light text-center">
                            <h4 class="mt-4">Akreditas</h4>
                            <p class="mt-3">Sekolah Kami saat ini sudah terverifikasi dan terakreditasi A.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="rounded p-4 shadow" style="height:275px">
                        <div class="d-flex justify-content-center">
                            <img src="assets/img/R 1.png" alt="" class="bg-light p-2 rounded-circle shadow-1"
                                style="widht:50px">
                        </div>
                        <div class="text-light text-center">
                            <h4 class="mt-4">Pengajar Kompeten</h4>
                            <p class="mt-3">Guru yang Update dengan perkembangan industri.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="rounded p-4 shadow" style="height:275px">
                        <div class="d-flex justify-content-center">
                            <img src="assets/img/employer-png-11 1.png" alt=""
                                class="bg-light p-2 rounded-circle shadow-1" style="widht:50px">
                        </div>
                        <div class="text-light text-center">
                            <h4 class="mt-4">Kemitraan Yang Luas</h4>
                            <p class="mt-3">Memperbesar kesempatan para peserta didik untuk bisa bekerja sebelum
                                lulus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="rounded p-4 shadow" style="height:275px">
                        <div class="d-flex justify-content-center">
                            <img src="assets/img/864423 1.png" alt=""
                                class="bg-light p-2 rounded-circle shadow-1" style="widht:50px">
                        </div>
                        <div class="text-light text-center">
                            <h4 class="mt-4">Fasilitas Lengkap</h4>
                            <p class="mt-3">Fasilitas pembelajaran yang lengkap dan terjamin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--untuk Visi Misi-->
    <div class="container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-lg-1">

                </div>
                <div class="col-lg-10 text-center mt-4 text-dark">
                    <h2> VISI MISI <span class="text-success">SMKN Model Gorontalo </span></h4>
                </div>
                <div class="col-lg-7">

                </div>
            </div>


            <!--row punya isi visi misi-->
            <div class="row">
                <!-- ini menggunakan 3 kolom yang tersedia -->
                <div class="col">
                    <div>
                        <div class=" justify-content-center ">
                            <h3 class="bg-secondary w-50 ps-3 rounded">VISI</h2>
                                <P>Terwujudnya Smk Yang Unggul Berbudi Pekerti Mulia, Menguasai Iptek, Didasari Iman Dan
                                    Taqwa, Berbudaya, Kompetitif Secara Global Dan Berawawasan Lingkungan Serta Mampu
                                    Menciptkana Lapangan kerja Mandiri</P>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div>
                        <div class=" justify-content-center ">
                            <h3 class="bg-secondary w-50 ps-3 rounded">MISI</h2>
                                {{-- <P>Membangun sistem manejemen pengelolaan SMK yang handal
                                    <br>Menyiapkan guru profesional yang memiliki kompetensi kejuruan <br>
                                    Menyelenggarakan pembelajaran sesuai kompetensi dan tuntutan pasar kerja
                                    <br> Menjalin hubungan kerja sama yang erat dengan dunia usaha dan industri </br>
                                </P> --}}
                                <ul>
                                    <li>Meningkatkan kualitas pembelajaran SMK yang unggul, <br>merata untuk menghasilkan
                                        lulusan yang terampil,<br> berkarakter, berdaya saing dalam bekerja dan mandiri</li>
                                    <li>Meningkatkan kompetensi profesionalisme pendidik <br>dan tenaga kependidikan untuk
                                        menyongsong revolusi industri 4.0</li>
                                    <li>Mengupayakan mutu layanan pendidikan kejuruan sesuai dengan tuntutan pasar kerja
                                    </li>
                                    <li>Menjalin networking yang baik dengan dunia usaha dan dunia industri</li>
                                    <li>Membangun sistem manajemen pengelolaan yang koprasional</li>
                                    <li>Menyelaraskan sarana dan prasarana pendidikan dalam peningkatan kualitas sekolah
                                    </li>
                                    <li>Mensinergikan kegiatan ekstrakurikuler yang berwawasan lingkungan</li>
                                    <li>Mengoptimalkan peran komite sekolah sebagai mitra kerja</li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Punya Sambutan kepsek-->
    <div class="container-fluid p-0 mt-3">
        <div class="row">
            <div class="col-lg-8 p-4" style="background-color: #D37E00; border-radius: 0px 50px 50px 0px;">
                <div>
                    <div class=" ">
                        <h3 class="text-light">Sambutan Kepala Sekolah</h3>
                        <P class="text-light">Assalamu'alaikum Wr. Wb.</P>
                        <p>Puji Syukur Alhamdulillah kita panjatkan kehadirat Allah SWT, atas segala rahmat dan
                            hidayah-Nya sehingga kita masih diberi kesempatan untuk bekerja dan berkarya di bidang
                            pendidikan. Karena pendidikan merupakan upaya kita untuk menyiapkan generasi penerus
                            bangsa, yang akan menggantikan estafet kepemimpinan kita di masa mendatang.
                            Kami mengucapkan selamat datang di website resmi SMK Jakarta Pusat 1 yang dapat
                            digunakan sebagai salah satu media komunikasi, dan interaksi antara civitas akademika
                            dan masyarakat pada umumnya.
                            Mari kita bekerja dan berkarya dengan mengharap ridho-Nya dan keikhlasan yang tulus demi
                            menyiapkan generasi bangsa yang berintegritas dan berprestasi.
                            Wassalamu'alaikum Wr. Wb</p>
                        <p class="text-light">Suleman Mayang M.Pd</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-4">
                <div>
                    <div class="">
                        <img src="assets/img/kepsek.jpg" alt="#" style="height:300px"
                            class="rounded float/right wt-50">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--bagian bawah-->

    </html>
@endsection
