<!doctype html>
<html style="font-size: 16px;" lang="{{App::getLocale()}}">

<!-- Mirrored from preview.colorlib.com/theme/props/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 12:17:01 GMT -->

<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="A.fonts%2c%2c_icomoon%2c%2c_style.css%2bfonts%2c%2c_flaticon%2c%2c_font%2c%2c_flaticon.css%2bcss%2c%2c_tiny-slider.css%2bcss%2c%2c_aos.css%2bcss%2c%2c_style.css%2cMcc.4n512Inwoc.css.pagespeed.cf.yP9zdky6Ak.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link href="https//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">




    <title>@yield('tittle')</title>
    <script nonce="2fcb8fda-8a08-447d-8c1c-bbc9e0ed7826">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = {
                    deferred: []
                }, a.zaraz.q = [], a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x = Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of[localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin", z.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }, ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
    <meta name="description">
</head>

<body class="u-body u-overlap u-overlap-contrast u-xl-mode" dir="{{(App::getLocale()=='ar' ? 'rtl' : 'ltr')}}">

    <header>
        @include('Frontweb.includes.header')
    </header>
        @include('Frontweb.includes.projectmain')
        @yield('content')
    <footer id="footer">
        @include('Frontweb.includes.footerpage3')
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js	"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('assets/js/aos.js%2bnavbar.js%2bcounter.js%2bcustom.js.pagespeed.jc.71zJnt3rs0.js')}}"></script>
    <script>
        eval(mod_pagespeed_G7G3GqP5Ne);
    </script>
    <script>
        eval(mod_pagespeed_GV7tYr4Kqb);
    </script>
    <script>
        eval(mod_pagespeed_h1rI$WP$Np);
    </script>
    <script>
        eval(mod_pagespeed_sQHpjDBzQZ);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71a2852839e45fd0","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    


</body>

<!-- Mirrored from preview.colorlib.com/theme/props/property-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 12:17:05 GMT -->

</html>