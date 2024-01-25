<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Absensi Siswa</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="stylesheet" href="{{ asset('assets/admin/images/fevicon.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-EjUekEe/T3i6XuzhGGxwTNjOebV0X/V+4VzJbGm76UJLTJlClBlTISqU3OPj2jDf7i9fFFP93AukH7bP8zYzYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/responsive.css') }}">
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/color.css') }}">
    <style>
        .topbar {
            background-color: #22DDD2;
            /* Change the background color to #22DDD2 */
        }
    </style>
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-select.css') }}">
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/perfect-scrollbar.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Page level custom styles -->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('assets/admin/images/logo/logo_icon.png') }}" alt="#" style="height: 80px;" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info" style="display: flex; align-items: center;">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <img src="{{ asset('assets/admin/images/logo/logo_icon.png') }}" alt="#" style="height: 80px;" />
                            <div style="display: flex; flex-direction: column; margin-left: 10px;">
                                <h2 style="color: aliceblue; font-size: 24px; margin: 0;">Absensi Siswa</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="sidebar_blog_2">

                    <ul class="list-unstyled components">

                        <li><a href="{{ route('Dashboard') }}"><i class="fa fa-dashboard yellow_color"></i><span>Dashboard</span></a>
                        <li><a href="{{ route('absensi.index') }}"><i class="fa fa-clock-o orange_color"></i> <span>Absensi Siswa</span></a></li>
                        <li><a href="{{ route('siswa.index') }}"><i class="fa fa-table purple_color2"></i> <span>Data Siswa</span></a></li>
                        <li><a href="{{ route('Generate') }}"><i class="fa fa-briefcase blue1_color"></i> <span>Generate Laporan</span></a></li>
                    </ul>
                </div>
            </nav>

            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav>
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="logo_section">
                            </div>
                            <div class="right_topbar">

                            </div>
                        </div>
                    </nav>
                </div>

                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')

                </div>


            </div>
            <!-- end dashboard inner -->
        </div>
    </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/animate.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/admin/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/admin/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/utils.js') }}"></script>
    <script src="{{ asset('assets/admin/js/analyser.js') }}"></script>
    <script src="{{ asset('assets/admin/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart_custom_style1.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages -->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Toggle sidebar when the button is clicked
            $("#sidebarToggle").click(function() {
                $("#wrapper").toggleClass("toggled");
            });
        });
    </script>
</body>

</html>