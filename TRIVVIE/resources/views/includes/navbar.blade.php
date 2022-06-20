<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white" style=" border-radius: 10px;">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ url('frontend/images/logo.png') }}" alt="" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-tabs mx-md-2">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-tabs mx-md-2">
                    <a class="nav-link" href="{{route('paket_travel')}}">Paket Travel</a>
                </li>
                <li class="nav-tabs mx-md-2">
                    <a class="nav-link" href="{{route('profile')}}">Profile</a>
                </li>
            </ul>

            @guest
            <!-- Mobile button -->
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" style=" border-radius: 10px;" type="button"
                    onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                    Masuk
                </button>
            </form>

            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" style=" border-radius: 10px;"
                    type="button" onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                    Masuk
                </button>
            </form>
            @endguest

            @auth
            <!-- Mobile button -->
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-login my-2 my-sm-0" style=" border-radius: 10px;" type="submit">
                    keluar
                </button>
            </form>

            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" style=" border-radius: 10px;"
                    type="submit">
                    keluar
                </button>
            </form>
            @endauth


        </div>
    </nav>
</div>