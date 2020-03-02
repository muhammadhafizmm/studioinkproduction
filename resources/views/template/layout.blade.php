<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('sass/layout.css') }}">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ url('/') }}/storage/img/studioink.png">
    <title>@yield('tittle')</title>
</head>
<body>
    <!-- navbar section -->
        <div class="navbar" id="navbar">
        <div class="logo"><a href="{{ url('/') }}"><img src="{{ url('/') }}/storage/img/studioink.png" alt=""></a></div>
            <div class="mobile-menu-button" id="mobile-menu-button" onclick="tooglebtn1()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="selection">
                <ul>
                    <li onmouseover="lineover(0)" onmouseout="lineout(0)"><a href="{{ url('/') }}" class="nav-select">Home</a><span class="nav-line"></span></li>
                    <li onmouseover="lineover(1)" onmouseout="lineout(1)"><a href="{{ url('/#client') }}" class="nav-select">Clients</a><span class="nav-line"></span></li>
                    <li onmouseover="lineover(2)" onmouseout="lineout(2)"><a href="{{ url('/#portfolio') }}" class="nav-select">Portfolio</a><span class="nav-line"></span></li>
                </ul>
            </div>
        </div>
        <div class="big-nav" id="select">
            <div class="selection" onclick="tooglebtn1()" >
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/#client') }}">Clients</a>
                <a href="{{ url('/#portfolio') }}">Portfolio</a> 
            </div>
        </div>
    <!-- end of navbar section -->

    @yield('content')
    
    <div class="footer" id="contact">
        <div class="email"><span>Contact Us! -- <a href="mailto:info@studioinkproduction.com">info@studioinkproduction.com</a></span></div>
        <div class="socmed">
            <a href="#"><img src="{{ url('/') }}/storage/img/youtube.png" alt=""></a>
            <a href="#"><img src="{{ url('/') }}/storage/img/whatsap.png" alt=""></a>
            <a href="#"><img src="{{ url('/') }}/storage/img/instagram.png" alt=""></a>
        </div>
    </div>
    <div class="scroll-up" onclick="location.href='#navbar'">
        <span></span>
        <span></span>
        <span></span>
    </div>
</body>
<!-- scroll animate -->
<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
<script>
    ScrollOut();
</script>
<!-- scroll up -->
@yield('js')
</html>