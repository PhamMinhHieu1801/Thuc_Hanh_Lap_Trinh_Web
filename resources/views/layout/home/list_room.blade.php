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
    <div class="hotel-information col-3 mt-3">
        <h3 style="margin-left: 45px;"> Information</h3>
        <table class="table" style="color:rgba(0,0,0,.5);">
            <tr>
                <th>Description: {{ $hotelDetail->description}} </th>
            </tr>
            <tr>
                <th>Local: {{ $hotelDetail->local }}</th>
            </tr>
                <tr> <th>Wifi:
                    @if ( $hotelDetail->wifi == 1 ) Yes @endif
                    @if ( $hotelDetail->wifi == 0 ) No @endif
                    </th>
                </tr>

            <tr>
                 <th>Car-park:
                     @if ( $hotelDetail->car_park == 1 ) Yes @endif
                    @if ( $hotelDetail->car_park == 0 ) No @endif
                 </th>
            </tr>
            <tr> <th>Breakfast:
                @if ( $hotelDetail->breakfast == 1 ) Yes @endif
                    @if ( $hotelDetail->breakfast == 0 ) No @endif
                </th>
            </tr>

        </table>
    </div>
</div>


<!-- form -->
<div class="list-room spacer d-flex flex-coulmn align-items-sm-center row mb-5">
        <div class="d-flex justify-content-center col-9 ml-4 pl-4">
            <h3 class="ml-5 pl-5"> List Room</h3>
        </div>
        <div class="search-container">
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
                <p class="card-text room-description"> {{ $room->description }}</p>
                <a href="{{ route('room_detail', $room->id) }}" class=" btn btn_default ">Check Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-flex justify-content-center mb-5">
    {{ $rooms->links() }}
</div>
</div>

@include("layout.home.footer")

@endsection
