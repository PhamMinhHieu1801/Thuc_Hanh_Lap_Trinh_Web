@extends("layout.app")

@section('content')

@include("layout.home.header")

<div class="container">
<div class="d-flex justify-content-center">
<h2 class="my-3"> List Hotel</h2>

</div>
<!-- form -->

<div class="row d-flex justify-content-around">

    @foreach($hotels as $hotel)
    <div class="col-sm-5 card px-0" style="width:100%">
        <div class="rooms">
            <img src="{{ URL::asset('storage/Image/hotel/hotel1.jpg') }}" class="card-img-top" style="width: 473px; height: 360px;" style="width:100%" >
            <div class="info card-body">
                <h3 class="card-title">{{ $hotel->name }}</h3>
                <p class="card-text hotel-descript">
                {{ $hotel->description}}
                </p>
                <a href="{{ route('list_room', $hotel->id) }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>
    @endforeach
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
