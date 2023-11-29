<!doctype html>
<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico')}}" />

    <title>NutriSante</title>

    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" />
    <link  href="{{ asset('assets/colors/color1.css')}}" />
    <link href="{{ asset('assets/switcher/css/switcher.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <link rel="stylesheet" href="{{asset ('css/masterback.css')}}">
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/colors/color1.css')}}" />
</head>

<body class="app ltr landing-page horizontal">
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <div class="page">
        <div class="page-main">
            <div class="main-content mt-0">
                <div class="side-app">
                    <div class="main-container">
                        <div class="">
                            @include('partials.menu')
                            @yield('page-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>




<script src="{{ asset('assets/js/jquery.min.js')}}"></script>


<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>


<script src="{{ asset('assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{ asset('assets/plugins/counters/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/plugins/counters/counters-1.js')}}"></script>


<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{ asset('assets/plugins/company-slider/slider.js')}}"></script>


<script src="{{ asset('assets/plugins/rating/jquery-rate-picker.js')}}"></script>
<script src="{{ asset('assets/plugins/rating/rating-picker.js')}}"></script>


<script src="{{ asset('assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
<script src="{{ asset('assets/plugins/ratings-2/star-rating.js')}}"></script>


<script src="{{ asset('assets/js/sticky.js')}}"></script>


<script src="{{ asset('assets/js/landing.js')}}"></script>
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('assets/js/sticky.js')}}"></script>
<script src="{{ asset('assets/js/circle-progress.min.js')}}"></script>
<script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{ asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>
<script src="{{ asset('assets/plugins/sidebar/sidebar.js')}}"></script>
<script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('assets/plugins/p-scroll/pscroll.js')}}"></script>
<script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js')}}"></script>
<script src="{{ asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{ asset('assets/plugins/chart/rounded-barchart.js')}}"></script>
<script src="{{ asset('assets/plugins/chart/utils.js')}}"></script>
<script src="{{ asset('assets/plugins/select2/select2.full.min.js')}}"></script>
 <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
 <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
 <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
 <script src="{{ asset('assets/js/apexcharts.js')}}"></script>
 <script src="{{ asset('assets/plugins/apexchart/irregular-data-series.js')}}"></script>
 <script src="{{ asset('assets/plugins/flot/jquery.flot.js')}}"></script>
 <script src="{{ asset('assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
 <script src="{{ asset('assets/plugins/flot/chart.flot.sampledata.js')}}"></script>
 <script src="{{ asset('assets/plugins/flot/dashboard.sampledata.js')}}"></script>
 <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
 <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
 <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>
 <script src="{{ asset('assets/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
 <script src="{{ asset('assets/js/typehead.js')}}"></script>
 <script src="{{ asset('assets/js/index1.js')}}"></script>
 <script src="{{ asset('assets/js/themeColors.js')}}"></script>         
 <script src="{{ asset('assets/js/custom.js')}}"></script>




</body>

</html>