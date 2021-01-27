@include('header')
<body>
    <div class="topnav">
        <a class="active" href="{{route('home')}}">Home</a>
{{--        <a href="#news">News</a>--}}
{{--        <a href="#contact">Contact</a>--}}
        <div class="topnav-right">
{{--            <a href="#search">Search</a>--}}
            @auth
                <a href="{{route('admin.logout')}}">Logout</a>
            @endauth
            @guest
                <a href="{{route('admin.login')}}">Login</a>
            @endguest
        </div>
    </div>

{{--    <div style="padding-left:16px">--}}
{{--        <h2>Top Navigation with Right Aligned Links</h2>--}}
{{--        <p>Some content..</p>--}}
{{--    </div>--}}

    @yield('content')
</body>
