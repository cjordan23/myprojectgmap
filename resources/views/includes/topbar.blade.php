<nav class="navbar navbar-toggleable-md fixed-top navbarTop">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#webNavbarTop" aria-controls="webNavbarTop" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a id="navTitle" class="navbar-brand hidden-sm hidden-xs" href="/dashboard">Dashboard</a>

    <div id="webNavbarTop" class="collapse navbar-collapse d-flex justify-content-end">
        <div class="d-flex justify-content-start">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
                @guest
                    <li>Hello Guest</li>
                @else
                    <li>Welcome</li>
                @endguest
            </ul>
            <!-- Logo -->
            {{--  <div class="logo text-left">
                    Logo Here
            </div>  --}}
        </div>

        <!-- Right Side Of Navbar -->
        <div>
            <ul>
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
        <!-- End of Right side navbar -->

    </div>

</nav>