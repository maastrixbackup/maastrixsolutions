<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maastrix Solutions</title>

    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>


<body class="admin_login">

    <section class="admin_login_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mx-auto admin_log">
                            <div>
                                <div class="admin_login_logo">
                                    <a href="{{ url('login') }}">
                                        <img src="{{ url('images/logo-blue.png') }}" height="80px;" width="60px">
                                    </a>
                                </div>
                                <div class="admin_login_cont">
                                    <h3><span>
                                            <img src="">
                                        </span></h3>
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="">
                                            <h3><span>
                                                    <img src="">
                                                </span>Login to Masstrix Admin</h3>

                                            <div class="admin_login_cont_new">
                                                <div class="admin_login_cont_new_input">
                                                    <!-- Email Address -->
                                                    <div>
                                                        <!--
                                                        <x-label for="email" :value="__('Email')" /> -->
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <x-input id="email" class="" type="email"
                                                            name="email" :value="old('email')" required autofocus />
                                                    </div>
                                                </div>

                                                <!-- Password -->
                                                <div class="admin_login_cont_new_input">
                                                    <!-- <x-label for="password" :value="__('Password')" /> -->
                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                    <x-input id="password" class="" type="password"
                                                        name="password" required autocomplete="current-password" />
                                                </div>
                                                <!-- Remember Me -->

                                                <div class="block mt-7">
                                                    <label for="remember_me" class="inline-flex items-center">
                                                        <input id="remember_me" type="checkbox" name="remember">
                                                        <span
                                                            class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                    </label>
                                                </div>
                                                <div class="mt-3">

                                                    <br><br>
                                                    <x-button class="ml-0 new_btn_log">
                                                        {{ __('Log in') }}
                                                    </x-button>
                                                    <div class="flex items-center justify-end mt-4">
                                                        @if (Route::has('password.request'))
                                                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                                href="{{ route('password.request') }}">
                                                                {{ __('Forgot your password?') }}
                                                            </a>
                                                        @endif


                                                    </div>
                                                </div>

                                            </div>

                                        </div>



                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        </form>
    </section>



    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>


</body>

</html>
