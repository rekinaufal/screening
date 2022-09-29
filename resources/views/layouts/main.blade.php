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
    <noscript id="__next_css__DO_NOT_USE__"></noscript>
    <style data-emotion="css-global" data-s="">
      body {
        font-family: var(--chakra-fonts-body);
        color: var(--chakra-colors-chakra-body-text);
        background: var(--chakra-colors-chakra-body-bg);
        transition-property: background-color;
        transition-duration: var(--chakra-transition-duration-normal);
        line-height: var(--chakra-lineHeights-base);
      }

    </style>

    <title>Screening Indonesia</title>
  </head>
  <body style="background-color:#fff" class="chakra-ui-light">
    {{-- <script id="chakra-script">
      !(function() {
        try {
          var a = function(c) {
              var v = "(prefers-color-scheme: dark)",
                h = window.matchMedia(v).matches ? "dark" : "light",
                r = c === "system" ? h : c,
                o = document.documentElement,
                s = document.body,
                l = "chakra-ui-light",
                d = "chakra-ui-dark",
                i = r === "dark";
              return s.classList.add(i ? d : l), s.classList.remove(i ? l : d), o.style.colorScheme = r, o.dataset.theme = r, r
            },
            n = a,
            m = "light",
            e = "chakra-ui-color-mode",
            t = localStorage.getItem(e);
          t ? a(t) : localStorage.setItem(e, a(m))
        } catch (a) {}
      })();
    </script> --}}
    <div id="__next">
      {{-- include navbar --}}
      @include('partials.navbar-screening')
      @yield('content')
      @yield('content-detail-article')
      @yield('content-detail-company')
      <div class="chakra-container css-1bxcldb">
        <div class="css-15x0zfb">
          <div class="chakra-stack css-q7ecfj">
            <h2 class="chakra-heading css-1gukj4y">Headquarter</h2>
            <p class="chakra-text css-jneyc">Beltway Office Park Tower B, Level 5 Jl. Letjen. TB Simatupang No. 41 Jakarta Selatan 12550, Indonesia</p>
          </div>
          <div class="chakra-stack css-q7ecfj">
            <h2 class="chakra-heading css-1gukj4y">Contact Us</h2>
            <p class="chakra-text css-jneyc">+ 62-21-2985-7266 <br>contactus@screeningindonesia.com </p>
          </div>
          <div class="chakra-stack css-q7ecfj">
            <h2 class="chakra-heading css-1gukj4y">Recent Posts</h2>
            <ul role="list" class="css-1uqk1hg">
              <li class="css-0">
                <a class="chakra-link css-spn4bz" href="{{ route('detail.article', Crypt::encrypt(1)) }}">3 Basic Differences between Permanent and Contract Employments</a>
              </li>
              <li class="css-0">
                <a class="chakra-link css-spn4bz" href="{{ route('detail.article', Crypt::encrypt(1)) }}">4 Most Popular Freelance Jobs</a>
              </li>
              <li class="css-0">
                <a class="chakra-link css-spn4bz" href="{{ route('detail.article', Crypt::encrypt(1)) }}">4 Things To Do Before Having an Online Job Interview</a>
              </li>
              <li class="css-0">
                <a class="chakra-link css-spn4bz" href="{{ route('detail.article', Crypt::encrypt(1)) }}">4 Time Management Tips for Employees</a>
              </li>
              <li class="css-0">
                <a class="chakra-link css-spn4bz" href="{{ route('detail.article', Crypt::encrypt(1)) }}">4 Tips to Use Office Facilities Wisely</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="css-0">
          <div class="chakra-container css-1jmjpae" spacing="4" justify="[object Object]" align="center">
            <p class="chakra-text css-jneyc">Copyright © 2022 Screening Indonesia</p>
          </div>
        </div>
      </div>
      <span></span>
    </div>
    <script src="{{ url('assets/screening-indonesia/js/react-refresh.js') }}"></script>
    <script id="__NEXT_DATA__" type="application/json">
      {
        "props": {
          "pageProps": {
            "allPosts": [{
              "title": "3 Basic Differences between Permanent and Contract Employments",
              "slug": "3-basic-differences-between-permanent-and-contract-employments"
            }, {
              "title": "4 Most Popular Freelance Jobs",
              "slug": "4-most-popular-freelance-jobs"
            }, {
              "title": "4 Things To Do Before Having an Online Job Interview",
              "slug": "4-things-to-do-before-having-an-online-job-interview"
            }, {
              "title": "4 Time Management Tips for Employees",
              "slug": "4-time-management-tips-for-employees"
            }, {
              "title": "4 Tips to Use Office Facilities Wisely",
              "slug": "4-tips-to-use-office-facilities-wisely"
            }],
            "revalidate": 10,
            "useCdn": false
          },
          "__N_SSG": true
        },
        "page": "/",
        "query": {},
        "buildId": "development",
        "isFallback": false,
        "gsp": true,
        "scriptLoader": []
      }
    </script>
    <div id="__next-build-watcher" style="position: fixed; bottom: 10px; right: 20px; width: 0px; height: 0px; z-index: 99999;"></div>
    <next-route-announcer>
      <p aria-live="assertive" id="__next-route-announcer__" role="alert" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;"></p>
    </next-route-announcer>
    <div class="chakra-portal">
      <ul role="region" aria-live="polite" id="chakra-toast-manager-top" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; margin: 0px auto; top: env(safe-area-inset-top, 0px); right: env(safe-area-inset-right, 0px); left: env(safe-area-inset-left, 0px);"></ul>
      <ul role="region" aria-live="polite" id="chakra-toast-manager-top-left" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; top: env(safe-area-inset-top, 0px); left: env(safe-area-inset-left, 0px);"></ul>
      <ul role="region" aria-live="polite" id="chakra-toast-manager-top-right" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; top: env(safe-area-inset-top, 0px); right: env(safe-area-inset-right, 0px);"></ul>
      <ul role="region" aria-live="polite" id="chakra-toast-manager-bottom-left" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; bottom: env(safe-area-inset-bottom, 0px); left: env(safe-area-inset-left, 0px);"></ul>
      <ul role="region" aria-live="polite" id="chakra-toast-manager-bottom" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; margin: 0px auto; bottom: env(safe-area-inset-bottom, 0px); right: env(safe-area-inset-right, 0px); left: env(safe-area-inset-left, 0px);"></ul>
      <ul role="region" aria-live="polite" id="chakra-toast-manager-bottom-right" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; bottom: env(safe-area-inset-bottom, 0px); right: env(safe-area-inset-right, 0px);"></ul>
    </div>
  </body>
</html>