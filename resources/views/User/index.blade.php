<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
  <link rel="stylesheet" href ="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/logins-style.css') }}">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <x-header/>
    <br/><br/><br/>
    <form method="POST" action="{{ route('authenticate')}}" class="login">
        @csrf
        <header><img src="{{ asset('/icons/login.png') }}" align="center" width="100" height="100" />
            <h4><b>Admin Login</b></h4>
        </header>
        <div class="field">
            <span class="fa fa-user"></span>
            <input type="email"
            name="email"
            placeholder="Enter Email"/>
        </div>
        @error('email')
            <p style="color:red">{{ $message }}</p>
        @enderror
            <div class="field">
            <span class="fa fa-lock"></span>
            <input type="password"
            name="password"
            placeholder="Enter Password"/>
        </div>
        @error('password')
            <p style="color:red;font-size:14px">{{ $message }}</p>
        @enderror
        <input type="submit" class="submit" value="LOGIN">
    </form>
    <x-alert/>
</body>
</html>
