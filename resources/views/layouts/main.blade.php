<!DOCTYPE html>
<!-- saved from url=(0022)http://localhost:3000/ -->
<html lang="en" data-theme="light" style="color-scheme: light;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="index,follow">
    <meta name="description" content="This example uses more of the available config options.">
    <meta property="og:title" content="Screening Indonesia">
    <meta property="og:description" content="This example uses more of the available config options.">
    <link rel="canonical" href="https://www.screeningindonesia.com/">
    <meta name="next-head-count" content="7">
    <link rel="shortcut icon" href="https://res.cloudinary.com/s32152/image/upload/v1660208344/logo/favicon_wtfmp2.png">
    <noscript data-n-css=""></noscript>
    <script defer="" nomodule="" src="{{ url('assets/screening-indonesia/js/polyfills.js') }}"></script>
    {{-- <script src="{{ url('assets/screening-indonesia/js/webpack.js') }}" defer=""></script> --}}
    <script src="{{ url('assets/screening-indonesia/js/main.js') }}" defer=""></script>
    <script src="{{ url('assets/screening-indonesia/js/_app.js') }}" defer=""></script>
    <script src="{{ url('assets/screening-indonesia/js/index.js') }}" defer=""></script>
    <script src="{{ url('assets/screening-indonesia/js/_buildManifest.js') }}" defer=""></script>
    <script src="{{ url('assets/screening-indonesia/js/_ssgManifest.js') }}" defer=""></script>
    <link rel="stylesheet" href="{{ url('assets/screening-indonesia/css/style.css') }}">

    <!-- css untuk select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- jika menggunakan bootstrap4 gunakan css ini  -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- owlcarousel / slider --}}
    <link rel="stylesheet" href="{{ url('assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/owlcarousel/css/owl.theme.default.min.css') }}">

    <!-- banner slider -->
    <link rel="stylesheet" href="{{ url('assets_banner/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets_banner/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets_banner/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets_banner/css/style.css') }}">

    <!-- modal -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>




    <noscript id="__next_css__DO_NOT_USE__"></noscript>
    <style data-emotion="css-global" data-s="">
        body {
            /* font-family: var(--chakra-fonts-body); */
            font-family: 'Lato', sans-serif;
            color: var(--chakra-colors-chakra-body-text);
            background: var(--chakra-colors-chakra-body-bg);
            transition-property: background-color;
            transition-duration: var(--chakra-transition-duration-normal);
            line-height: var(--chakra-lineHeights-base);
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .text-blue {
            color: #3C4E83;
        }

        .text-oren {
            color: #FFBD59;
        }

        .text-abu {
            color: #A6A6A6;
        }

        .navactive {
            color: #FFBD59;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .centered-top .centered {
            top: 30% !important;
        }

        .centered-top .owl-1 .owl-nav {
            top: 30% !important;
        }

        .top-10-area {
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 9;
        }

        @media screen and (max-width: 767px) {
          .top-10-area {
            position: relative !important;
          }
        }
    </style>
    <title>Screening Indonesia</title>
</head>

<body style="background-color:#fff" class="chakra-ui-light">
    <div id="__next">
        {{-- include navbar --}}
        @include('partials.navbar-screening')
        @yield('content')
        @yield('content-detail-article')
        @yield('content-detail-company')
        @include('partials.footer-screening')
        <span></span>
    </div>
    {{-- javascript --}}
    @yield('javascript')
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    {{-- carousel --}}
    <script src="{{ url('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ url('assets/screening-indonesia/js/react-refresh.js') }}"></script> --}}
    <!-- js banner slider -->
    <script src="{{ url('assets_banner/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('assets_banner/js/popper.min.js') }}"></script>
    <!-- js dibawah di command karna bentrok dengan dropdown -->
    <!-- <script src="{{ url('assets_banner/js/bootstrap.min.js') }}"></script> -->
    <script src="{{ url('assets_banner/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets_banner/js/main.js') }}"></script>
    <!-- untuk password visibility -->
    <script>
        function myFunction() {
            var x = document.getElementById("showpassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        var owlClient = $('.carousel-clients');
        owlClient.owlCarousel({
            center: true,
            items: 5,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2500,
            autoplayHoverPause: false, // set true if want to pause when mouse hover on slider
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });

        var owl = $('.carousel-testi');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 20,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
        });
    </script>
    <div id="__next-build-watcher"
        style="position: fixed; bottom: 10px; right: 20px; width: 0px; height: 0px; z-index: 99999;"></div>
    <next-route-announcer>
        <p aria-live="assertive" id="__next-route-announcer__" role="alert"
            style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;">
        </p>
    </next-route-announcer>
    <div class="chakra-portal">
        <ul role="region" aria-live="polite" id="chakra-toast-manager-top"
            style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; margin: 0px auto; top: env(safe-area-inset-top, 0px); right: env(safe-area-inset-right, 0px); left: env(safe-area-inset-left, 0px);">
        </ul>
        <ul role="region" aria-live="polite" id="chakra-toast-manager-top-left"
            style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; top: env(safe-area-inset-top, 0px); left: env(safe-area-inset-left, 0px);">
        </ul>
        <ul role="region" aria-live="polite" id="chakra-toast-manager-top-right"
            style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; top: env(safe-area-inset-top, 0px); right: env(safe-area-inset-right, 0px);">
        </ul>
        <ul role="region" aria-live="polite" id="chakra-toast-manager-bottom-left"
            style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; bottom: env(safe-area-inset-bottom, 0px); left: env(safe-area-inset-left, 0px);">
        </ul>
        <ul role="region" aria-live="polite" id="chakra-toast-manager-bottom"
            style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; margin: 0px auto; bottom: env(safe-area-inset-bottom, 0px); right: env(safe-area-inset-right, 0px); left: env(safe-area-inset-left, 0px);">
        </ul>
        <ul role="region" aria-live="polite" id="chakra-toast-manager-bottom-right"
            style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; bottom: env(safe-area-inset-bottom, 0px); right: env(safe-area-inset-right, 0px);">
        </ul>
    </div>
</body>

</html>
