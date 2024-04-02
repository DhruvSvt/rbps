<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Radha Ballabh Public School</title>
    <meta name="description"
        content="Radha Ballabh Public School, Tundla - Awagarh Rd, Alawalpur, Uttar Pradesh 283204." />
    <link rel="canonical" href="https://rbps.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Radha Ballabh Public School" />
    <meta property="og:description"
        content="Radha Ballabh Public School, Tundla - Awagarh Rd, Alawalpur, Uttar Pradesh 283204." />
    <meta property="og:url" content="https://rbps.com/" />
    <meta property="og:site_name" content="Radha Ballabh Public School" />
    <meta property="og:image" content="https://mdayurvediccollege.in/demo/school/img/ogRBPSTUNDLA.jpg" />
    <meta name="keywords" content="rbps school" />
    <!-- ============ FAVICON ============ -->

    <link rel="shortcut icon" type="image/x-icon"
        href="https://mdayurvediccollege.in/demo/school/img/favRBPS_TUNDLA1.png">
    <meta name="theme-color" content="#ffb900">
    <meta name="msapplication-TileColor" content="#ffb900">
    <meta name="msapplication-navbutton-color" content="#ffb900">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffb900">

    @include('visitors.inc.headerLinks')

    @yield('head')
</head>

<body>
    <div id="preloader"></div>

    @include('visitors.inc.header')

    @yield('content')

    @include('visitors.inc.footer')

    <!-- all js here -->
    @include('visitors.inc.footerLinks')

    @yield('scripts')
</body>

</html>
