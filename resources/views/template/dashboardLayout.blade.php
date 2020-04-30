
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    @yield('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('sass/dashboardLayout.css') }}" rel="stylesheet" type="text/css" >
    <link rel="icon" href="{{ url('/') }}/storage/img/logoHead.png">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>@yield('tittle')</title>
</head>
<body>
    <nav class="navbar navbar-light">
        <a class="navbar-brand" href="\dashboard"><img src="{{ url('/') }}/storage/img/studioink.png" alt=""></a>
        <!-- Example split danger button -->
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle nav-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Option
            </button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="/dashboard/photography">Edit Photography</a>
                <a class="dropdown-item" href="/dashboard/videography">Edit Videography</a>
                <a class="dropdown-item" href="/dashboard/client">Edit Client</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">Log-Out</a>
            </div>
        </div>
        </div>
    </nav>

   @yield('content')

   <div class="footer" id="contact">
        <div class="email"><span>Contact Us! -- <a href="mailto:info@studioinkproduction.com">info@studioinkproduction.com</a></span></div>
        <div class="socmed">
            <a href="#"><img src="{{ url('/') }}/storage/img/youtube.png" alt=""></a>
            <a href="#"><img src="{{ url('/') }}/storage/img/whatsap.png" alt=""></a>
            <a href="#"><img src="{{ url('/') }}/storage/img/instagram.png" alt=""></a>
        </div>
    </div>
</body>
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
