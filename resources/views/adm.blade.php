@extends('layout.tamplate')

@section('content')
<div class="w-50 center border rounded px-3 py-3 mx-auto mt-5 shadow-sm">

    <h1> SELAMAT DATANG DI HALAMAN ADMIN </h1>
    <h2> {{Auth::user()->name}} </h2>
    <a class="nav-link" href="/logout">Logout</a>
</div>
@endsection
