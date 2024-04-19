<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Panel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/customize.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">IN+</h1>
            </div>
            <h3 class="text-center">Welcome to Admin Dashboard </h3>
            <br>
            <form  method="POST" class="m-t" role="form" action="{{ route('admin.auth.login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" autocomplete="off" type="email" class="form-control" placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="text-danger"> {{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="" for="password">Password</label>
                    <input name="password" autocomplete="off" type="password" class="form-control" placeholder="Password" >
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#">
                    <small>Forgot password?</small>
                </a>
                <br>
                <br>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

