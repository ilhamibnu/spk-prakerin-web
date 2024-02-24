<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gymove.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Feb 2024 13:34:38 GMT -->
<head>
    <!-- Title -->
    <title>Gymove - @yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">

    <meta name="keywords" content="admin, admin dashboard, admin template, bootstrap, bootstrap 5, bootstrap 5 admin template, fitness, fitness admin, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app">
    <meta name="description" content="Discover Gymove, the ultimate fitness solution that is designed to help you achieve a healthier lifestyle with its cutting-edge features and personalized programs. Gymove is a fully mobile-responsive admin dashboard template that provides the perfect blend of exercise, nutrition, and motivation. Begin your fitness journey today with Gymove and visit DexignZone for more information.">

    <meta property="og:title" content="Gymove  - Fitness Bootstrap Admin Dashboard Template">
    <meta property="og:description" content="Discover Gymove, the ultimate fitness solution that is designed to help you achieve a healthier lifestyle with its cutting-edge features and personalized programs. Gymove is a fully mobile-responsive admin dashboard template that provides the perfect blend of exercise, nutrition, and motivation. Begin your fitness journey today with Gymove and visit DexignZone for more information.">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/toastr/css/toastr.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('admin/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>
<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="nav-header">
            <a href="index.html" class="brand-logo" aria-label="Gymove">
                <img class="logo-abbr" src="{{ asset('admin/images/logo.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('admin/images/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('admin/images/logo-text.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        @include('admin.partials.header')

        @include('admin.partials.sidebar')

        <div class="content-body default-height">
            @yield('content')
        </div>

        @include('admin.partials.footer')

    </div>

    <!-- Required vendors -->
    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart-js/chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('admin/vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('admin/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('admin/vendor/toastr/js/toastr.min.js') }}"></script>
    <!-- All init script -->
    <script src="{{ asset('admin/js/plugins-init/toastr-init.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('admin/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/js/deznav-init.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>
    <script>
        function carouselReview() {
            /*  testimonial one function by = owl.carousel.js */
            jQuery('.testimonial-one').owlCarousel({
                nav: true
                , loop: true
                , autoplay: true
                , margin: 30
                , dots: false
                , left: true
                , navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
                , responsive: {
                    0: {
                        items: 1
                    }
                    , 484: {
                        items: 2
                    }
                    , 882: {
                        items: 3
                    }
                    , 1200: {
                        items: 2
                    },

                    1540: {
                        items: 3
                    }
                    , 1740: {
                        items: 4
                    }
                }
            })
        }
        jQuery(window).on('load', function() {
            setTimeout(function() {
                carouselReview();
            }, 1000);
        });

    </script>

    @yield('script')
</body>

<!-- Mirrored from gymove.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Feb 2024 13:37:58 GMT -->
</html>
