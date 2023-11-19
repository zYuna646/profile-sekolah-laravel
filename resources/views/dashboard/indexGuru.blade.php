@extends('template-dashboard')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 justify-content-center">
        Selamat Datang {{ Auth::user()->name }}
    </div>
@endsection
