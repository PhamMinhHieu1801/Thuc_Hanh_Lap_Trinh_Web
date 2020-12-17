<section class="header">
  {{-- <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="" href="index.php"><img src="{{ URL::asset('storage/Image/logo.png') }}" alt="holiday crown"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-right">
        <ul class="nav justify-content-end nav-tabs  ">
          <li><a href="/" class="text">Home </a></li>
          <li><a href="rooms-tariff.php" class="text">Rooms & Tariff</a></li>
          <li><a href="introduction.php" class="text">Introduction</a></li>
          <li><a href="gallery.php" class="text">Gallery</a></li>
          <li><a href="{{ route('contact') }}" class="text">Contact</a></li>
        </ul>
      </div><!-- Wnavbar-collapse -->
    </div><!-- container-fluid -->
  </nav> --}}
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
                    <a class="nav-link" href="#">ROOMS & TARIFF</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">INTRODUCTION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LOGIN/REGISTER</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</section>
