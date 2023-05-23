@extends('layout.tamplate')

@section('content')
<div class="w-50 center border rounded px-3 py-3 mx-auto mt-5 shadow-sm">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="login" method="POST">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" value="{{old('email')}}" class="form-control" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <p>
        Belum punya akun?
        <a href="register">silakan mendaftar</a>
    </p>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
@endsection
