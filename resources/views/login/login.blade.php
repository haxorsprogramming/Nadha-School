<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>NadhaSchool - Homepage</title>

    <meta name="description" content="Nadha School - Aplikasi Manajemen Sekolah">
    <meta name="author" content="haxorsprogrammingclub">
    <meta name="robots" content="noindex, nofollow">

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('ladun/login/assets/css/codebase.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('ladun/login/assets/css/login.css') }}">

</head>

<body>

    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-image" style='background-image: url("{{ asset('ladun/login/assets/media/photos/cover_'.$pic.'.jpg') }}");'>
                <div class="row mx-0 bg-black-op">
                    <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                        <div class="p-30 invisible" data-toggle="appear">
                            <p class="font-size-h3 font-w600 text-white">
                                Spirit of Collaborative, never stop coding.
                            </p>
                            <p class="font-italic text-white-op">
                                Copyright &copy; Haxorsprogrammingclub - Support by NadhaMedia
                            </p>
                        </div>
                    </div>
                    <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                        <div class="content content-full">
                            <!-- Header -->
                            <div class="px-30 py-10">
                                <div class="teksTengah">
                                    <img src="{{ asset('ladun/default/img/nadha_school.jpg') }}" class="wd200">
                                </div>
                                <h1 class="h3 font-w700 mt-30 mb-10">Welcome to NadhaSchool</h1>
                                <h2 class="h5 font-w400 text-muted mb-0">Please sign in</h2>
                            </div>

                            <div class="js-validation-signin px-30" id="divForm">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="txtUsername">
                                            <label for="login-username">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="password" class="form-control" id="txtPassword">
                                            <label for="login-password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-sm btn-hero btn-alt-primary" @click="loginAtc">
                                        <i class="si si-login mr-10"></i> Sign In
                                    </a>
                                    <div class="mt-30">
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#!">
                                            <i class="fa fa-plus mr-5"></i> Create Account
                                        </a>
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#!">
                                            <i class="fa fa-warning mr-5"></i> Forgot Password
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@next"></script>

    <script src="{{ asset('ladun/login/assets/js/codebase.core.min.js') }}"></script>
    <script src="{{ asset('ladun/login/assets/js/codebase.app.min.js') }}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('ladun/login/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Page JS Code -->
    <script src="{{ asset('ladun/login/assets/js/pages/op_auth_signin.min.js') }}"></script>

    <!-- Custom JS Code  -->
    <script>
        const server = "{{ url('') }}/";
    </script>

    <script src="{{ asset('ladun/login/assets/js/login.js') }}"></script>

</body>

</html>