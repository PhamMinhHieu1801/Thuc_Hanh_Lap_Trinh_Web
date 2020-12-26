@extends("layout.app")

@section('content')

@include("layout.home.header")

<div class="container">
<div class="d-flex justify-content-center">
<h2 class="my-3"> List Hotel</h2>

</div>
<div class="search-container ">
    <form method="get" action="{{ route('list_hotel.search') }}">
       @csrf
       <input type="text" name="hotel_search" placeholder="Search.." aria-label="search" @if (isset($keyword)) value="{{ $keyword }}" @endif>
       <button type="submit"><i class="fa fa-search"></i></button>
   </form>
</div>
<!-- form -->

<div class="row d-flex justify-content-around">

    @foreach($hotels as $hotel)
    <div class="col-sm-5 card px-0" style="width:100%">
        <div class="rooms">
            @if ($hotel->image==NULL)
              <img src="{{ URL::asset('storage/Image/hotel/hotel1.jpg') }}" class="card-img-top" style="width: 473px; height: 360px;" style="width:100%" >
              @endif
              @if ($hotel->image!=NULL)
            <img src="{{ asset ($hotel->image) }}" class="card-img-top" style="width: 473px; height: 360px;" style="width:100%" >
            @endif
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
</div>
</div>
<div class="d-flex justify-content-center">
    {{ $hotels->links() }}
</div>

@include("layout.home.footer")

@endsection
