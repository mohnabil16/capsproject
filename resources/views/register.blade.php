@extends('layout.tamplate')

@section('content')
<div class="w-50 center border rounded px-3 py-3 mx-auto mt-5 shadow-sm">
    <form action="create" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" value="{{Session::get('name')}}" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" value="{{Session::get('email')}}" class="form-control" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>
@endsection
