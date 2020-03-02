@extends('template/layout')
@section('css')
<link href="{{ asset('sass/portfolio.css') }}" rel="stylesheet" type="text/css" >
@endsection
@section('tittle', 'Videography')

{{-- content --}}
@section('content')
    <div class="content">
        <div class="tittle">videography</div>
        <div class="header">
            <div class="selector active">
                <h3 class="opsi active">All</h3>
                <span class="line active"></span>
            </div>
        </div>
        @php $j = 0 @endphp
        <div class="containerGallery" id="containerGal">
            <div class="gallery">
                @foreach ($videography as $item)
                <div class="gambar" style="background-image: url({{url('/')}}/storage/img/thumbnail/{{$item -> thumbnail}});" onclick="popingUp({{ $j }})">
                    <div class="komentar"><span>{{$item -> komentar}}</span></div>
                </div>
                @php $j++ @endphp
                @endforeach
            </div>
        </div>
        <div class="popUp">
            <div class="exit" onclick="popingGone();" onmouseover="pause()">
                <span></span>
                <span></span>
            </div>
            @foreach ($videography as $item)
            <div class="object">
                <iframe width="560" height="315" src="{{$item -> embedlink}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pop-up.js') }}"></script>
@endsection