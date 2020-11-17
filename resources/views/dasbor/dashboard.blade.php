<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Nadha School - Homepage</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- General CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('ladun/dasbor/stisla/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/fontawesome/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons"> -->
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('ladun/dasbor/stisla/css/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/dasbor/stisla/css/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/dasbor/stisla/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/dasbor/stisla/css/datatables.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('ladun/dasbor/stisla/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/dasbor/stisla/css/nadharesto.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/dasbor/stisla/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/dasbor/nProg/nprogress.css') }}" />

    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
</head>

<body style="font-family: 'Nunito Sans';">
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg" style='background-color:#2980b9;'></div>
            <nav class="navbar navbar-expand-lg main-navbar" id='divNavbar'>
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle">
                        <a href="#!" @click='' data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep" id='capNotif'><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifikasi Sekolah</div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#!" @click='' class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-clipboard-check"></i>
                                    </div>
                                    <div class="dropdown-item-desc">

                                        <div class="time text-primary"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#!" @click=''>Lihat semua <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="ladun/dasbor/img/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?=session('username'); ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('/logout') }}" id="" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar" id='divMenu'>
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand" style="margin-top:12px;">
                        <a href="#!" style="height:30px;">
                            <img src="{{ asset('ladun/default/img/nadha_school.jpg') }}" style="width: 100px;">
                        </a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#!">NL</a>
                    </div>
                        @include('layout/menuAdmin')
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1 id="capUtama"> Nadha School - @{{activeForm}}</h1>

                    </div>

                    <div id="divUtama">

                    </div>

                    <div id="loading-ajax" style="display:none"></div>

                </section>

            </div>
        </div>
    </div>
        <footer class="main-footer" id="divFooter">Copyright &copy; - Haxorsprogrammingclub</footer>
        <!-- General JS Scripts -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('ladun/dasbor/stisla/js/popper.js') }}"></script>
        <script src="{{ asset('ladun/dasbor/stisla/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('ladun/dasbor/stisla/js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('ladun/dasbor/stisla/js/moment.min.js') }}"></script>
        <script src="{{ asset('ladun/dasbor/stisla/js/stisla.js') }}"></script>

        <!-- JS Libraries -->
        <script src="{{ asset('ladun/dasbor/stisla/js/datatables.min.js') }}"></script>
        <script src="{{ asset('ladun/dasbor/stisla/js/iziToast.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- Firebase  -->
        <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.17.0/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.17.0/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.17.0/firebase-database.js"></script>

        <!-- Template JS File -->

        <script src="{{ asset('ladun/dasbor/stisla/js/scripts.js') }}"></script>

        <!-- Page Specific JS File -->
        <script>
            const server = "{{ url('') }}/";
        </script>
        <script src="{{ asset('ladun/dasbor/index.js') }}"></script>
</body>

</html>