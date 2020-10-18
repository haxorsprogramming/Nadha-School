<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login - Nadha Resto</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/style.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/components.css">

</head>

<body onload="initF()">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="{{ asset('ladun/login/img/nadha_resto.png') }}" alt="logo" width="200">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="email">Username</label>
                                        <input type="text" class="form-control" id="txtUsername">
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input type="password" class="form-control" id='txtPassword'>
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-primary btn-lg btn-block btn-icon icon-left" href='#!' @click='loginAtc' id='btnLogin'>
                                            <i class="fas fa-sign-in-alt"></i> 
                                            Login
                                        </a>
                                    </div>                             

                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; @{{appName}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://demo.getstisla.com/assets/modules/jquery.min.js"></script>
    <script src="https://demo.getstisla.com/assets/modules/popper.js"></script>
    <script src="https://demo.getstisla.com/assets/modules/tooltip.js"></script>
    <script src="https://demo.getstisla.com/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://demo.getstisla.com/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="https://demo.getstisla.com/assets/modules/moment.min.js"></script>
    <script src="https://demo.getstisla.com/assets/js/stisla.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="https://demo.getstisla.com/assets/js/scripts.js"></script>
    <script>
        const server = "{{ url('') }}";
    </script>
    <script src="{{ asset('ladun/login/js/login.js') }}"></script>
</body>

</html>