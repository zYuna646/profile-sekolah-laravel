<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <title>SMKN MODEL GORONTALO></title>
    <link rel="shortcut icon" type="image/png" href="assets/img/SMAN MODEL LOGO.png" />
    <!---- bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---- owl carousel -->
    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css" /> -->
    <!---- fontawesome/ icon ---->
    {{-- <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" /> --}}
    <!---- style css custom -->
    <link rel="stylesheet" href="assets/css/style.css" />

    {{-- <script src="assets/js/jquery-3.3.1.slim.min.js"></script> --}}
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid" style="padding-left: 80px; padding-right: 80px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link nav-active fw-bold" aria-current="page" href="{{route('landing')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akademik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('prestasi')}}">Prestasi</a></li>
                            <li><a class="dropdown-item" href="#">Link E-Raport</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{route('kompetensi')}}">Kompetensi Keahlian</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Staff
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('struktur')}}">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{route('staff')}}">Guru & Tata Usaha</a></li>                        
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{route('galeri')}}">Galeri Kegiatan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="container-fluid p-0 mt-3">
            <div class="row">
                <div class="col-lg-12 p-4" style="background-color:black">
                    <div>
                        <div class=" ">
                            <img src="{{ asset ('assets/img/SMAN MODEL LOGO.png')}}" alt="#">
                            <P class="text-light">SMA NEGERI MODEL GORONTALO
                                <br>Jl. Muchlis Rahim, Desa Panggulo Barat – Botupingge Kab Bone Bolango – Provinsi
                                Gorontalo 96554 Indonesia
                            </p>
                        </div>
                        <div class=" ">
                            <P class="text-light">follow Us</P>
                            <img src="{{ asset ('assets/img/facebook-instagram-twitter-icons-png-12 1.png')}}" alt="#">
                        </div>
                    </div>
                </div>
            </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>
