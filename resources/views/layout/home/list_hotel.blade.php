@extends("layout.app")

@section('content')

@include("layout.home.header")

<div class="container">
<div class="d-flex justify-content-center">
<h2 class="my-3"> List Hotel</h2>

</div>


<!-- form -->

<div class="row d-flex justify-content-around">
    <div class="col-sm-5 card px-0" style="width:100%">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/hotel/hotel1.jpg') }}" class="card-img-top img-fluid" style="width:100%" >
            <div class="info card-body">
                <h3 class="card-title">ABC</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('list_room') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

    <div class="col-sm-5 wowload fadeInUp card px-0">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/hotel/hotel2.jpg') }}" class="card-img-top">
            <div class="info card-body">
                <h3 class="card-title">Linh Chi</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('list_room') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

    <div class="col-sm-5 card px-0">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/hotel/hotel3.jpg') }}" class="card-img-top">
            <div class="info card-body">
                <h3 class="card-title">Thanh Tu</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('list_room') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

    <div class="col-sm-5 card px-0">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/hotel/hotel4.jpg') }}" class="card-img-top">
            <div class="info card-body">
                <h3 class="card-title">Yen Vy</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('list_room') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

    <div class="col-sm-5 card px-0">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/hotel/hotel5.jpg') }}" class="card-img-top">
            <div class="info card-body">
                <h3 class="card-title">A</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('list_room') }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>

    <div class="col-sm-5  card px-0">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/hotel/hotel6.jpg') }}" class="card-img-top">
            <div class="info card-body">
                <h3 class="card-title">Mama</h3>
                <p class="card-text"> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                <a href="{{ route('list_room') }}" class=" btn btn_default ">Check Details</a>
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