@extends('template/layout')
@section('css')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ asset('sass/login.css') }}" rel="stylesheet" type="text/css" >
<style>
    .footer{
        width: 100% !important;
    }
</style>
@endsection
@section('tittle', 'AdminLogin')
{{-- section content --}}
@section('content')
    <div class="login">
        <span>Login Admin</span>
        <div class="card">
            <form method="post" class="card-body" action="/postlogin">
                @csrf
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="youremail@example.com" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Your Password" name="password">
                </div>
                @if (session('status'))
                    <div class="invalid-text">
                        {{session('status')}}
                    </div>
                @endif
                <button type="submit" class="btn btn-info" name="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
{{-- end section --}}
@section('js')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
@endsection