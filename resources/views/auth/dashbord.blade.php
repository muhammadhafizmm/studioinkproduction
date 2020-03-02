
@extends('template/dashboardLayout')
@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('sass/dashboard.css') }}" rel="stylesheet" type="text/css" >
@endsection
@section('tittle', 'dashboard')

{{-- content --}}
@section('content')
    <div class="content">
        <div class="greeting">
            <span>Hello {{auth()->user()->name}}</span>
        </div>
        <div class="option">
            <a href="/dashboard/photography"><button type="button" class="btn btn-light">Edit Photography</button></a>
            <a href="/dashboard/videography"><button type="button" class="btn btn-light">Edit Videography</button></a>
            <a href="/dashboard/client"><button type="button" class="btn btn-light">Edit Client</button></a>
        </div>
        <div class="option-phone">
            <a href="/dashboard/photography"><button type="button" class="btn btn-light btn-lg btn-block">Edit Photography</button></a>
            <a href="/dashboard/videography"><button type="button" class="btn btn-light btn-lg btn-block">Edit Videography</button></a>
            <a href="/dashboard/client"><button type="button" class="btn btn-light btn-lg btn-block">Edit Client</button></a>
        </div>
    </div>
@endsection


@section('js')
@endsection
