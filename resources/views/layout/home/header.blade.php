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
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list_hotel') }}">LIST HOTEL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">INTRODUCTION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LOGIN/REGISTER</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</section>
