@extends("layout.app")

@section('content')

@include("layout.home.header")

<div class="container">

<div class="d-flex row my-3 pb-5">
    <div class="hotel-image col-8 d-flex flex-column align-items-sm-center">
        <h2 class="">  {{ $hotelDetail->name }}</h2>
        @if ($hotelDetail->image==NULL)
            <img src="{{ URL::asset('storage/Image/hotel/hotel1.jpg') }}" class="card-img-top" style="width: 473px; height: 360px;" style="width:100%" >
        @endif
        @if ($hotelDetail->image!=NULL)
            <img src="{{ asset ($hotelDetail->image) }}" class="card-img-top img-fluid" style="width:100%" >
        @endif
    </div>
    <div class="hotel-information col-3 mt-3 ml-5">
        <h4> Information</h4>
        <table class="table">
            <tr>
                <th>Description: {{ $hotelDetail->description}} </th>
            </tr>
            <tr>
                <th>Local: {{ $hotelDetail->local }}</th>
            </tr>
                <tr> <th>Wifi: Yes</th></tr>

            <tr>  <th>Car-park: Yes</th></tr>
            <tr> <th>Breakfast: Yes</th></tr>
            <tr>  <th>Rating: {{ $hotelDetail->rating }}</th></tr>
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
             <form method="get" action="{{ route('list_room.search', $hotelDetail->id) }}">
                @csrf
                <input type="text" name="room_search" placeholder="Search.." aria-label="search" @if (isset($keyword)) value="{{ $keyword }}" @endif>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

<div class="row d-flex justify-content-around mt-5 ">
    @foreach($rooms as $room)
    <div class="col-sm-3 card px-0 mr-2" style="width:100%">
        <div class="rooms">
            @if ($room->image==NULL)
                <img src="{{ URL::asset('storage/Image/room/8.jpg') }}" class="card-img-top img-fluid" style="width:100%" >
            @endif
            @if ($room->image !=NULL)
                <img src="{{ asset($room->image) }}" class="card-img-top img-fluid" style="width:100%" >
            @endif
            <div class="info card-body">
                <h3 class="card-title">{{ $room->name }}</h3>
                <p class="card-text"> {{ $room->description }}</p>
                <a href="{{ route('room_detail', $room->id) }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>

@include("layout.home.footer")

@endsection
