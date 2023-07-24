<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="login-form">

        <form action="{{ route('register.post') }}" method="POST">
             @csrf
             <a href="#" class="logo"> <span>T</span>icket</a></br>
             <h3>Register</h3>
            
            <input type="text" class="box" name="username" placeholder="Enter your username" required autofocus>
            @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
            @endif
            <input type="email" class="box" name="email" placeholder="Enter your Email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <input type="password" class="box" name="password" placeholder="Enter your password" required autofocus>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <input type="submit" value="Register now" class="btn">
            <input type="checkbox" id="agreement">
            <label for="agreement"> I am agree all information is true. </label>
            <p>don't have any account? <a href="{{route('login')}}">Login now</a></p>
            
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>