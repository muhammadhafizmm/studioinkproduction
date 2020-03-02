@extends('template/dashboardLayout')
@section('css')
<link href="{{ asset('sass/portfolio.css') }}" rel="stylesheet" type="text/css" >
@endsection
@section('tittle', 'Videography')

{{-- content --}}
@section('content')
    <div class="content">
        <div class="tittle">editclient</div>
        <div class="header">
            <div class="selector active" onclick="tooglebtn2(0)">
                <h3 class="opsi active">Client Atas</h3>
                <span class="line active"></span>
            </div>
            <div class="selector" onclick="tooglebtn2(1)">
                <h3 class="opsi">Client Bawah</h3>
                <span class="line"></span>
            </div>
        </div>
        <div class="containerGallery" id="containerGal">
            <div class="gallery">
                <div class="gambar" style="background-color: #0f4c81;" onclick="location.href='{{ url('/dashboard/tambahClient') }}'">
                    <div class="tambah"><span>Tambah Data</span></div>
                </div>
                @foreach ($client as $item)
                    @if ($item -> tipe == 'atas')
                    <div class="gambar" style="background-image: url({{ url('/') }}/storage/img/client/{{$item -> nama}});">
                        <div class="komentar">
                            <div class="form">
                                <form action="" method="post">
                                    @method('delete')
                                    {{ csrf_field() }}
                                    <button type="submit" name="id" value="{{$item -> id}}" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="gallery">
                <div class="gambar" style="background-color: #0f4c81;" onclick="location.href='{{ url('/dashboard/tambahClient') }}'">
                    <div class="tambah"><span>Tambah Data</span></div>
                </div>
                @foreach ($client as $item)
                    @if ($item -> tipe == 'bawah')
                    <div class="gambar" style="background-image: url({{ url('/') }}/storage/img/client/{{$item -> nama}});">
                        <div class="komentar">
                            <div class="form">
                                <form action="" method="post">
                                    @method('delete')
                                    {{ csrf_field() }}
                                    <button type="submit" name="id" value="{{$item -> id}}" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
@endsection
