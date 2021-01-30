<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
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
                        <a href="{{ url('/') }}" class="logo logo-admin"><img src="{{ asset('assets') }}/images/dalusy.jpg" height="24" alt="logo"></a>
                    </h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="p-3">
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                       
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Enter your <b>Email</b> and instructions will be sent to you!
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ $email ?? old('email') }}" required="" placeholder="Email">    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Send Email</button>
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