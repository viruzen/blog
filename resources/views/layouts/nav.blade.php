<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container-fluid">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

            <a href="{{route('blog.index')}}">Home</a>
            <a href="{{route('about')}}">About</a>
            <a href="{{route('category')}}">Category</a>
            <a href="{{route('book')}}">Book</a>
            <a href="{{route('music')}}">Music</a>

            @guest
                <a href="{{route('login')}}">Login</a>
                <a href="">Register</a>
            @endguest
            @auth
                <a href="{{route('profile.index')}}">Profile</a>
                <a id="logout" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endauth
        </div>

        <div id="main">
            <button class="openbtn" onclick="openNav()">☰ REVUE</button>
        </div>

        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit "> Search </button>
        </form>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }

    </script>
</nav>
