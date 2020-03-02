@extends('template/dashboardLayout')
@section('css')

@endsection
@section('tittle', 'Tambah Client')

{{-- content --}}
@section('content')
    <div class="content">
        <h1>TAMBAH DATA CLIENT</h1>
        <form method="post" action="" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="database" value="concept">
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="@error('gambar') is-invalid @enderror"><br>
                @error('gambar')<span class="invalid-feedback">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="option">Client Position</label>
                <div class="input-group mb-3">
                    <select class="custom-select" id="option" name="clientPosition">
                    <option selected>Choose...</option>
                    <option value="atas">Atas</option>
                    <option value="bawah">Bawah</option>
                    </select>
                    <div class="input-group-append">
                    <label class="input-group-text" for="option">Options</label>
                    </div>
                </div>
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