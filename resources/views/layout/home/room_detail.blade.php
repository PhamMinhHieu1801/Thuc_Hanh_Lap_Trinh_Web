@extends("layout.app")

@section('content')

@include("layout.home.header")

<div class="container d-flex flex-column align-items-sm-center ">

<h1 class="title">{{ $roomDetail->name }}</h1>

<div id="demo" class="carousel slide" data-ride="carousel">

<div class="image">   
  @if ($roomDetail->image==NULL)
    <img src="{{ URL::asset('storage/Image/room/8.jpg') }}"  width="1000px" height="500">
  @endif
  @if ($roomDetail->image !=NULL)
      <img src="{{ asset ($roomDetail->image) }}"  width="1000px" height="500">
    @endif
  </div>
</div>

</div>
<div class="container mt-5 ">
 <div class="room-features spacer">

  <div class="row d-flex flex-row">
    <div class="col-5 mr-5">
     @include("layout.home.booking_room")
     @if (!empty($roomDetail->room_booked))
       <form action="{{ route('users_booking.destroy',$roomDetail->id)}}" method="GET" class="delete-form">
        @csrf
        @method('DELETE')
           <button class="btn btn-primary" onclick="return confirm('Destroy Booking Room?');">Destroy Booking</i></button>
       </form>

@endif

    </div>
		<div class="hotel-information col-6 mt-3">
			<h3 style="margin-left: 180px;" class="mb-3"> Information</h3>
      <table class="table" style="color:rgba(0,0,0,.5);">
        <tr>
					<th>Description: {{ $roomDetail->description }} </th>
				</tr>
				<tr>
					<th>Type: {{ $roomDetail->type }} </th>
				</tr>
				<tr>
					<th>Bed: {{ $roomDetail->bed }} giường</th>

                </tr>

                <tr> <th>Bath: {{ $roomDetail->bath }} phòng tắm</th></tr>

            <tr>  <th>TV: {{ $roomDetail->tv }}</th></tr>
            <tr> <th>Phone: {{ $roomDetail->phone }}</th></tr>
            <tr>  <th>Wardobe: {{ $roomDetail->wardobe }}</th></tr>
            </tr>
			</table>
		</div>
</div>
<div class="row justify-content-center mb-5 pb-5">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
              <h4> Comments</h4>
              @foreach($comments as $comment)
                <div class="display-comment" style="margin-left:40px;" >

                  <strong>{{ $comment->user->name }} </strong>
                  <p>{{ $comment->description }}</p>
                </div>
                {{-- Delete --}}
                 @if (($comment->user_id) == Auth::id())
                  <div class="d-flex align-items-center">
                    <form method="POST" action="{{ route('feedback.destroy',  $comment->id) }}" class="delete-form" >
                      @csrf
                      @method('DELETE')
                   <button class="btn btn-default" value="Delete" onclick="return confirm('Delete This ?')">   <i class="fa fa-trash" aria-hidden="true"></i>
                    </form>
                  </div>
                @endif

              @endforeach
              <hr />
              <h4>Add comment</h4>
              @foreach($bookeds as $booked)
                  @if (($booked->user_id) == Auth::id())
                  <form method="post" action="{{ route('feedback.store', $roomDetail->id) }}">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="content"></textarea>
                        <input type=hidden name=room_id value="{{ $roomDetail->id }}" />
                    </div>
                    <div class="form-group">
                        <input type=submit class="btn btn_default" value="Add Comment" />
                    </div>
                </form>
                    @break
                  @endif
                @endforeach
          </div>
      </div>
  </div>
</div>
</div>
</div>
@include("layout.home.footer")
