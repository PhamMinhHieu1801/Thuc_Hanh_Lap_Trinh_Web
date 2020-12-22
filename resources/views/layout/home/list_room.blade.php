@extends("layout.app")

@section('content')

@include("layout.home.header")

<div class="container">

<div class="d-flex row my-3 pb-5">
    <div class="hotel-image col-8 d-flex flex-column align-items-sm-center">
        <h2 class="">  Hotel 's name</h2>
       <img src="{{ URL::asset('storage/Image/hotel/hotel1.jpg') }}" class="card-img-top img-fluid" style="width:100%" >
    </div>
    <div class="hotel-information col-3 mt-3 ml-5">
        <h4> Information</h4>
        <table class="table">
            <tr>
                <th>Description: Khach san Ok </th>
            </tr>
            <tr>
                <th>Local: Thai Binh</th>
            </tr>
                <tr> <th>Wifi: Yes</th></tr>

            <tr>  <th>Car-park: Yes</th></tr>
            <tr> <th>Breakfast: Yes</th></tr>
            <tr>  <th>Ratting: Yes</th></tr>
            </tr>

        </table>
    </div>
</div>


<!-- form -->
<div class="list-room d-flex flex-coulmn align-items-sm-center row">
<div class="d-flex justify-content-center col-9 ml-4 pl-4">
        <h3 class="ml-5 pl-5"> List Room</h3>
        </div>
        <div class="search-container ">
             <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
    </div>

<div class="row d-flex justify-content-around mt-5 ">

    <div class="col-sm-3 card px-0 mr-2" style="width:100%">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/room/8.jpg') }}" class="card-img-top img-fluid" style="width:100%" >
            <div class="info card-body">
                <h3 class="card-title">ABC</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('room_detail') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 wowload fadeInUp card px-0 mr-2">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/room/9.jpg') }}" class="card-img-top">
            <div class="info card-body">
                <h3 class="card-title">Linh Chi</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('room_detail') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 card px-0 mr-2">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/room/10.jpg') }}" class="card-img-top">
            <div class="info card-body">
                <h3 class="card-title">Thanh Tu</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('room_detail') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 card px-0 mr-2">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/room/11.jpg') }}" class="card-img-top">
            <div class="info card-body">
                <h3 class="card-title">Yen Vy</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('room_detail') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 card px-0 mr-2">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/room/8.jpg') }}" class="card-img-top">
            <div class="info card-body">
                <h3 class="card-title">A</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('room_detail') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3  card px-0 mr-2">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/room/9.jpg') }}" class="card-img-top">
            <div class="info card-body">
                <h3 class="card-title">Mama</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('room_detail') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

<!--
                     <div class="text-center">
                     <ul class="pagination">
                     <li class="disabled"><a href="#">«</a></li>
                     <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li><a href="#">»</a></li>
                     </ul>
                     </div>
                     -->


</div>
</div>

@include("layout.home.footer")

@endsection
