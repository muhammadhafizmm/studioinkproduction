@extends('template/dashboardLayout')
@section('css')
    <link href="{{ asset('sass/portfolio.css') }}" rel="stylesheet" type="text/css" >
@endsection
@section('tittle', 'Edit Photograph')

{{-- content --}}
@section('content')
    <div class="content">
        <div class="tittle">edit photography</div>
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
            <div class="gallery">
                <div class="gambar" style="background-color: #0f4c81;" onclick="location.href='{{ url('/dashboard/tambahConcept?table=concept') }}'">
                    <div class="tambah"><span>Tambah Data</span></div>
                </div>
                @foreach ($ConceptPhotography as $item)
                <div class="gambar" style="background-image: url({{ url('/') }}/storage/img/ConceptPhotography/{{$item -> fileName}});">
                    <div class="komentar">
                        <div class="form">
                            <form action="" method="post">
                                @method('delete')
                                {{ csrf_field() }}
                                <input type="hidden" name="table" value="concept">
                                <button type="submit" name="id" class="btn btn-danger" value="{{$item ->id}}">Hapus</button>
                            </form>
                        </div>
                        <span>{{$item -> imageComment}}</span>
                    </div>
                </div>  
                @endforeach
            </div>
            <div class="gallery">
                <div class="gambar" style="background-color: #0f4c81;" onclick="location.href='{{ url('/dashboard/tambahDocument?table=document') }}'">
                    <div class="tambah"><span>Tambah Data</span></div>
                </div>
                @foreach ($DocumentPhotography as $item)
                <div class="gambar" style="background-image: url({{ url('/') }}/storage/img/DocumentPhotography/{{$item -> fileName}});">
                    <div class="komentar">
                        <div class="form">
                            <form action="" method="post">
                                @method('delete')
                                {{ csrf_field() }}
                                <input type="hidden" name="table" value="document">
                                <button type="submit" name="id" class="btn btn-danger" value="{{$item -> id}}">Hapus</button>
                            </form>
                        </div>
                        <span>{{$item -> imageComment}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
@endsection