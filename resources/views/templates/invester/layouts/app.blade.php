<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#313131" />
    <!-- Site Properties -->
    <title>Homepage - Wave HTML5 Template</title>
    <!-- Critical preload -->
<link rel="preload" href="{{asset('assets/templates/trending/js/vendors/uikit.min.js')}}" as="script">
<link rel="preload" href="{{asset('assets/templates/trending/css/vendors/uikit.min.css')}}" as="style">
<link rel="preload" href="{{asset('assets/templates/trending/css/style.css')}}" as="style">
    <!-- Icon preload -->
<link rel="preload" href="{{asset('assets/templates/trending/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{asset('assets/templates/trending/fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
<link rel="preload" href="{{asset('assets/templates/trending/fonts/rubik-v9-latin-500.woff2')}}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{asset('assets/templates/trending/fonts/rubik-v9-latin-300.woff2')}}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{asset('assets/templates/trending/fonts/rubik-v9-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
<link rel="stylesheet" href="{{asset('assets/templates/trending/css/vendors/uikit.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/templates/trending/css/style.css')}}">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
   @yield('panel')

    <!-- Javascript -->
    <script src="{{asset('assets/templates/trending/js/vendors/uikit.min.js')}}"></script>
    <script src="{{asset('assets/templates/trending/js/vendors/indonez.min.js')}}"></script>
    <script src="{{asset('assets/templates/trending/js/config-theme.js')}}"></script>
</body>

</html>
