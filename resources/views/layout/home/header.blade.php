<section class="header">
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid d-flex flex-xl-nowrap flex-md-wrap">
        <div class="col-xl-4 col-md-12 col-6 d-md-flex justify-content-md-center justify-content-center">
            <div class="img-header"><img alt="" src="{{ URL::asset('storage/Image/logo.png') }}">
            </div>
        </div>
        <div class="col-xl-8 col-md-12 collapse navbar-collapse d-md-flex flex-md-nowrap justify-content-xl-around justify-content-center" id="collapsingNavbar">
            <ul class="nav navbar-nav menu-header">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list_hotel') }}">LIST HOTEL</a>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('edit_user') }}">EDIT USER</a>
                </li>
                @if(Auth::user()->role == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.index') }}">ADMIN</a>
                </li>
                @endif
                @endif

                <li class="nav-item">
                    @if(Auth::check())
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            LOGOUT
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    @elseif(!Auth::check())
                        <a class="nav-link" href="{{ route('login') }}">LOGIN/REGISTER</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
</section>
