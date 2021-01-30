<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dalusy - APP</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">
        <!-- DataTables -->
        <link href="{{ asset('assets') }}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets') }}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets') }}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets') }}/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" type="text/css">
        <!-- Plugins css -->
        <link href="{{ asset('assets') }}/plugins/timepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" />
        <link href="{{ asset('assets') }}/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="{{ asset('assets') }}/plugins/clockpicker/jquery-clockpicker.min.css" rel="stylesheet" />
        <link href="{{ asset('assets') }}/plugins/colorpicker/asColorPicker.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets') }}/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets') }}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="{{ asset('assets') }}/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="{{ asset('assets') }}/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <script type="text/javascript">
        window.onload = function() {jam();}
        function jam(){
            var a = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            a.innerHTML = h + ":" + m + ":" + s;

            setTimeout('jam()', 1000);
        }

        function set(a) {
            a = a < 10 ? '0' + a : a;
            return a;
        }
    </script>
    </head>
    <body>
     <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <!-- Logo container-->
                    <div class="logo">
                        <a href="{{ url('home') }}" class="logo">
                            <img src="{{ asset('assets') }}/images/logo-sm.png" alt="" height="22" class="logo-small">
                            <img src="{{ asset('assets') }}/images/dalusy.jpg" alt="" height="16" class="logo-large">
                        </a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0">
                             <!-- jam-->
                            <li class="list-inline-item dropdown notification-list">
                                 {{strftime("%a, %d %B %Y")}}<span class="nav-link dropdown-toggle arrow-none waves-effect" id="jam">
                               </span>
                            </li>
                          
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    {{ Auth::user()->name }} <img src="{{asset(Auth::user()->avatar)}}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome</h5>
                                    </div>
                                    <a class="dropdown-item" href="{{ url('profile') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{ url('home') }}"><i class="mdi mdi-airplay"></i>Home</a>
                            </li>
                            <li class="has-submenu">
                                <a href="{{ url('profile') }}"><i class="mdi mdi-layers"></i>Profile</a>
                            </li>
                            <li class="has-submenu">
                                <a href="{{ url('overtime') }}"><i class="mdi mdi-bullseye"></i>Overtime</a>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                @yield('content')

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2020 - {{date('Y')}} Dalusy.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/js/popper.min.js"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('assets') }}/js/modernizr.min.js"></script>
        <script src="{{ asset('assets') }}/js/waves.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.slimscroll.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.nicescroll.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('assets') }}/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables/jszip.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables/buttons.print.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('assets') }}/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <!-- Plugins js -->
         <script src="{{ asset('assets') }}/plugins/timepicker/moment.js"></script>
         <script src="{{ asset('assets') }}/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
         <script src="{{ asset('assets') }}/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
         <script src="{{ asset('assets') }}/plugins/clockpicker/jquery-clockpicker.min.js"></script>
         <script src="{{ asset('assets') }}/plugins/colorpicker/jquery-asColor.js" type="text/javascript"></script>
         <script src="{{ asset('assets') }}/plugins/colorpicker/jquery-asGradient.js" type="text/javascript"></script>
         <script src="{{ asset('assets') }}/plugins/colorpicker/jquery-asColorPicker.min.js" type="text/javascript"></script>
         <script src="{{ asset('assets') }}/plugins/select2/select2.min.js" type="text/javascript"></script>
 
         <script src="{{ asset('assets') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
         <script src="{{ asset('assets') }}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
         <script src="{{ asset('assets') }}/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
         <script src="{{ asset('assets') }}/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
         <!-- Plugins Init js -->
         <script src="{{ asset('assets') }}/pages/form-advanced.js"></script>
        <!-- Datatable init js -->
        <script src="{{ asset('assets') }}/pages/datatables.init.js"></script>
       
        <!-- App js -->
        <script src="{{ asset('assets') }}/js/app.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable2').DataTable();  
            } );
        </script>
        <?php 
        $sekarang  = date('Y');
        $jarak     = 100;
        $dahulu    = $sekarang - $jarak;
        ?>
         <script>
          $( function() {
            $( ".tanggal" ).datepicker({
              
              "dateFormat":"dd-mm-yy",
              "yearRange":"{{ $dahulu }}:{{ $sekarang }}"
            });
          } );
          </script>
    </body>
</html>