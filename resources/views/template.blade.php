@include('header')
<body>
    <h2>Math Coder API</h2>
    <div class="topnav">
        <a class="active" href="{{route('home')}}">Home</a>
        <div class="topnav-right">
            @auth
                <a href="{{route('admin.logout')}}">Logout</a>
            @endauth
            @guest
                <a href="{{route('admin.login')}}">Login</a>
            @endguest
        </div>
    </div>
    @yield('content')
</body>
