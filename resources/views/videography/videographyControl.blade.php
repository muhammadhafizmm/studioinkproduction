@extends('template/dashboardLayout')
@section('css')
<link href="{{ asset('sass/portfolio.css') }}" rel="stylesheet" type="text/css" >
@endsection
@section('tittle', 'Videography')

{{-- content --}}
@section('content')
    <div class="content">
        <div class="tittle">editvideography</div>
        <div class="header">
            <div class="selector active">
                <h3 class="opsi active">All</h3>
                <span class="line active"></span>
            </div>
        </div>
        <div class="containerGallery" id="containerGal">
            <div class="gallery">
                <div class="gambar" style="background-color: #0f4c81;" onclick="location.href='{{ url('/dashboard/tambahVideo') }}'">
                    <div class="tambah"><span>Tambah Data</span></div>
                </div>
                @foreach ($videography as $item)
                <div class="gambar" style="background-image: url({{ url('/') }}/storage/img/thumbnail/{{$item -> thumbnail}});">
                    <div class="komentar">
                        <div class="komentar"><span>{{$item -> komentar}}</span></div>
                        <div class="form">
                            <form action="" method="post">
                                @method('delete')
                                {{ csrf_field() }}
                                <input type="hidden" name="table" value="document">
                                <button type="submit" name="id" class="btn btn-danger" value="{{$item -> id}}">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pop-up.js') }}"></script>
@endsection