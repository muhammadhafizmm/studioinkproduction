@extends('template/layout')
@section('css')
<link href="{{ asset('sass/style.css') }}" rel="stylesheet" type="text/css" >
<script type="text/javascript"src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
@endsection
@section('tittle', 'HomePage')

{{-- content --}}
@section('content')
    <!-- content section -->
    <!-- greeting -->
    <div class="greeting child">
        <video class="background-video" no-control muted loop autoplay src="{{url('/')}}/storage/img/videoOpening.mp4"></video>
        <h1 data-scroll>PHOTO & VIDEO</h1>
        <h1 data-scroll>PRODUCTION HOUSE</h1>
    </div>
        <!-- end of greeting -->
    
        <!-- client -->
        <div class="client child" id="client" data-scroll>
            <div class="all-client">
                <div class="header"><h2>Clients</h2></div>
                <div class="gallery-client" id="gallery1" data-scroll>
                    @foreach ($client as $item)
                    @if ($item -> tipe == 'atas')
                        <div class="logo-client"><img src="{{url('/')}}/storage/img/client/{{$item -> nama}}" alt=""></div>
                    @endif
                    @endforeach
                </div>
                <div class="gallery-client" id="gallery2" data-scroll>
                    @foreach ($client as $item)
                    @if ($item -> tipe == 'bawah')
                        <div class="logo-client"><img src="{{url('/')}}/storage/img/client/{{$item -> nama}}" alt=""></div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End of Client -->
    
        <!-- Portfolio -->
        <div class="portfolio child" id="portfolio">
        <div class="header">
            <h2 data-scroll>Portfolio</h2>
        </div>
        <div class="port-content" data-scroll>
            <div class="photograph" onmouseout="portoOut()" onmouseover="portoHover(0)"  onclick="location.href='{{ url('/photography') }}';">
                <div class="overlay"></div>
                <h3>Photography</h3>
                <span>View</span>
            </div>
            <div class="videograph" onmouseout="portoOut()" onmouseover="portoHover(1)" data-scroll onclick="location.href='{{ url('/videography') }}'">
                <div class="overlay"></div>
                <h3>Videography</h3>
                <span>View</span>
            </div>
        </div>
        </div>
    <!-- end of content section -->
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
@endsection