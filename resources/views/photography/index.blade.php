@extends('template/layout')
@section('css')
<link href="{{ asset('sass/portfolio.css') }}" rel="stylesheet" type="text/css" >
@endsection
@section('tittle', 'Photograph')

{{-- content --}}
@section('content')
    <div class="content">
        <div class="tittle">photography</div>
        <div class="header">
            <div class="selector active" onclick="tooglebtn2(0)">
                <h3 class="opsi active">Concept</h3>
                <span class="line active"></span>
            </div>
            <div class="selector" onclick="tooglebtn2(1)">
                <h3 class="opsi">Document</h3>
                <span class="line"></span>
            </div> 
        </div>
        <div class="containerGallery" id="containerGal">
            @php $j = 0 @endphp
            <div class="gallery">
                @foreach ($ConceptPhotography as $item)
                <div class="gambar" style="background-image: url({{url('/')}}/storage/img/ConceptPhotography/{{$item -> fileName}});" onclick="popingUp({{ $j }})">
                    <div class="komentar"><span>{{$item -> imageComment}}</span></div>
                </div>
                @php $j++ @endphp
                @endforeach
            </div>
            <div class="gallery">
                @foreach ($DocumentPhotography as $item)
                <div class="gambar" style="background-image: url({{url('/')}}/storage/img/DocumentPhotography/{{$item -> fileName}});" onclick="popingUp({{ $j }})">
                    <div class="komentar"><span>{{$item -> imageComment}}</span></div>
                </div>
                @php $j++ @endphp
                @endforeach
            </div>
        </div>
        <div class="popUp">
            <div class="exit" onclick="popingGone()">
                <span></span>
                <span></span>
            </div>
            @foreach ($ConceptPhotography as $item)
                <div class="object" style="background-image: url({{url('/')}}/storage/img/ConceptPhotography/{{$item -> fileName}});">
                    <span>{{$item -> imageComment}}</span>
                </div>
            @endforeach
            @foreach ($DocumentPhotography as $item)
            <div class="object" style="background-image: url({{url('/')}}/storage/img/DocumentPhotography/{{$item -> fileName}});">
                <span>{{$item -> imageComment}}</span>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pop-up.js') }}"></script>
@endsection