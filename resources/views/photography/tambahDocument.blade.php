@extends('template/dashboardLayout')
@section('css')

@endsection
@section('tittle', 'Tambah Photo')

{{-- content --}}
@section('content')
    <div class="content">
        <h1>TAMBAH DATA DOCUMENT</h1>
        <form method="post" action="" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="database" value="document">
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="@error('gambar') is-invalid @enderror"><br>
                @error('gambar')<span class="invalid-feedback">{{ $message }}</span>@enderror
            </div>
            <div>
            <label for="komentar">Komentar </label>
            <input type="text" name="komentar" id="komentar" class="form-control @error('komentar') is-invalid @enderror">
            @error('gambar')<span class="invalid-feedback">{{ $message }}</span>@enderror<br>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
@endsection