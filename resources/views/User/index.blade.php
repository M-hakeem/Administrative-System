<x-login/>
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
            placeholder="Enter Email"
            value="{{ old('email')}}"/>
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
