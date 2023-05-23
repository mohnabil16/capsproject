<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cirebon Online Store</title>

<!--favicon-->
<link rel="shortcut icon" href="./assets/images/logo/favicon.svg" type="image/x-icon">
<link rel="stylesheet" href="css\loginstyl.css">
</head>
<body>
<div class="wrapper">
    <!-- ========== Start Sign-Up ========== -->
    <div class="form-wrapper sign-up">
    <form action="">
        <h2>Daftar Disini</h2>
        <div class="input-group">
            <label for="name" class="form-label">name</label>
            <input type="text" value="{{Session::get('name')}}" class="form-control" name="name">
        </div>
        <div class="input-group">
            <label for="email" class="form-label">Email address</label>
            <input type="email" value="{{Session::get('email')}}" class="form-control" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="input-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn">Sign Up</button>
        <div class="sign-link">
            <p>Sudah mempunyai akun? <a href="#" class="signIn-link">Login</a></p>
        </div>
    </form>
    </div>
    <!-- ========== End Sign-Up ========== -->

    <!-- ========== Start Sign-in ========== -->
    <div class="form-wrapper sign-in">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="">
        <h2>Login Disini</h2>
        <div class="input-group">
            <label for="email" class="form-label">Email address</label>
            <input type="email" value="{{old('email')}}" class="form-control" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="input-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="forgot-pass">
            <a href="#">Lupa password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="sign-link">
            <p>Belum mempunyai akun? <a href="#" class="signUp-link">Sign Up</a></p>
        </div>
    </form>
    </div>
    <!-- ========== End Sign-in ========== -->
</div>

<script src="js\logintmp.js"></script>
</body>
</html>
