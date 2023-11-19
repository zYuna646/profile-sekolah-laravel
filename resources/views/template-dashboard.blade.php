<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin SMK Model Gorontalo</title>
    <link rel="shortcut icon" type="image/png" href="assetsDashboard/images/logos/SMAN MODEL LOGO.png" />
    {{-- <link rel="stylesheet" href="assetsDashboard/css/styles.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assetsDashboard') }}/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- dataTable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img row">
                        <div class="col">
                            <img src="{{ asset('assets') }}/img/SMAN MODEL LOGO.png" style="width:50px" />
                        </div>
                        <div class="col mr-3 mt-3 ">
                            <h4 class="fw-bolder">SMKN MODEL</h4>
                        </div>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Home</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link {{ request()->is('dashboard') ? 'active' : '' }}"
                                    href="{{ route('dashboard') }}" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-layout-dashboard"></i>
                                    </span>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Data Master</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link {{ request()->is('dashboard/kompetensi*') ? 'active' : '' }}"
                                    href="{{ route('dashboard.kompetensi') }}" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-book"></i>
                                    </span>
                                    <span class="hide-menu">Kompetensi Keahlian</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link {{ request()->is('dashboard/prestasi*') ? 'active' : '' }}"
                                    href="{{ route('dashboard.prestasi') }}" aria-expanded="false">
                                    <span>
                                        <i class="fa-solid fa-trophy"></i>
                                    </span>
                                    <span class="hide-menu">Prestasi</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link {{ request()->is('dashboard/staff*') ? 'active' : '' }}"
                                    href="{{ route('dashboard.staff') }}" aria-expanded="false">
                                    <span>
                                        <i class="fa-solid fa-user"></i>
                                    </span>
                                    <span class="hide-menu">Staff</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link {{ request()->is('dashboard/guru*') ? 'active' : '' }}"
                                    href="{{ route('dashboard.guru') }}" aria-expanded="false">
                                    <span>
                                        <i class="fa-solid fa-user"></i>
                                    </span>
                                    <span class="hide-menu">Guru</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link {{ request()->is('dashboard/struktur*') ? 'active' : '' }}"
                                    href="{{ route('dashboard.struktur') }}" aria-expanded="false">
                                    <span>
                                        <i class="fa-solid fa-users"></i>
                                    </span>
                                    <span class="hide-menu">Struktur Organisasi</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link {{ request()->is('dashboard/galeri*') ? 'active' : '' }}"
                                    href="{{ route('dashboard.galeri') }}" aria-expanded="false">
                                    <span>
                                        <i class="fa-solid fa-image"></i>
                                    </span>
                                    <span class="hide-menu">Galeri Kegiatan</span>
                                </a>
                            </li>
                        @elseif(Auth::user()->role == 'guru')
                            <li class="sidebar-item">
                                <a class="sidebar-link {{ request()->is('dashboard-guru') ? 'active' : '' }}"
                                    href="{{ route('dashboard-guru') }}" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-layout-dashboard"></i>
                                    </span>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link {{ request()->is('dashboard-guru.erapor/erapor*') ? 'active' : '' }}"
                                    href="{{ route('dashboard-guru.erapor') }}" aria-expanded="false">
                                    <span>
                                        <i class="fa-solid fa-image"></i>
                                    </span>
                                    <span class="hide-menu">E Rapor</span>
                                </a>
                            </li>
                        @endif
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assetsDashboard') }}/images/profile/user-1.jpg"
                                        alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">


                @yield('content')


                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Design and Developed by Dhani Ardiyanto Syahdila dan Lintang cahyani Putri</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assetsDashboard') }}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('assetsDashboard') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsDashboard') }}/js/sidebarmenu.js"></script>
    <script src="{{ asset('assetsDashboard') }}/js/app.min.js"></script>
    <script src="{{ asset('assetsDashboard') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('assetsDashboard') }}/libs/simplebar/dist/simplebar.js"></script>
    <script src="{{ asset('assetsDashboard') }}/js/dashboard.js"></script>

    {{-- dataTable --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        let table = new DataTable('#tabel');
    </script>
</body>

</html>
