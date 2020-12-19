@extends("layout.app")

@section('content')

@include("layout.home.header")

<div class="container d-flex flex-column align-items-sm-center ">

<h1 class="title">Tên Room</h1>

<div id="demo" class="carousel slide" data-ride="carousel">

<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ URL::asset('storage/Image/room/8.jpg') }}"  width="1000px" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ URL::asset('storage/Image/room/9.jpg') }}"  width="1000px" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ URL::asset('storage/Image/room/10.jpg') }}"  width="1000px" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>
<div class="container">
<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p>Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.</p>
    <p>By Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect's natural. Don't stubbornly. Don't stubbornly. Don't stubbornly. -And Gain Power By Learning Ways To Become Peaceful. </p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Amenitites</h3>    
    <ul>
      <li>One of the greatest barriers to making the sale is your prospect.</li>
      <li>Principle to work to make more money while having more fun.</li>
      <li>Unlucky people. Don't stubbornly.</li>
      <li>Principle to work to make more money while having more fun.</li>
      <li>Space in your house How to sell faster than your neighbors</li>
    </ul>
    

    </div>  
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Size<span>44 sq</span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Price<span>$200.00</span></div>
    </div>
  </div>
</div>
                     


</div>
@include("layout.home.footer")

@endsection