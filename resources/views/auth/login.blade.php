<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dalusy - Aplikasi Admin</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">
        <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets') }}/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>       
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mt-0 m-b-15">
                        <a href="{{ url('login') }}" class="logo logo-admin"><img src="{{ asset('assets') }}/images/dalusy.jpg" height="24" alt="logo"></a>
                    </h3>
                    <div class="p-3">
                       <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required="" placeholder="Email Address">
                                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required="" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    @if (Route::has('password.request'))
                                    <a href="" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
                                     @endif
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a href="{{ url('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> <small>Create an account ?</small></a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/js/popper.min.js"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('assets') }}/js/modernizr.min.js"></script>
        <script src="{{ asset('assets') }}/js/waves.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.slimscroll.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.nicescroll.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="{{ asset('assets') }}/js/app.js"></script>

    </body>
</html>