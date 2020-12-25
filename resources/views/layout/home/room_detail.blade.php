@extends("layout.app")

@section('content')

@include("layout.home.header")

<div class="container d-flex flex-column align-items-sm-center ">

<h1 class="title">{{ $roomDetail->name }}</h1>

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
<div class="container mt-5">
	<div class="book_button d-flex flex-row-reverse">
		<a href="{{ route('room_detail', $roomDetail->id) }}" class=" btn btn_default ">Check Details</a>
	</div>
 <div class="room-features spacer">
  <div class="row">
    <div class="col-7"> 
    <p>{{ $roomDetail->description}}</p>
    </div>
		<div class="hotel-information col-5 mt-3">
			<h4 class=""> Information</h4>
			<table class="table">
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
</div>
<div class="row justify-content-center">
  <div class="col-12">
      <div class="card">
          <div class="card-body">     
              <h4> Comments</h4>
              @foreach($comments as $comment)
                <div class="display-comment" style="margin-left:40px;" >
                  <strong>{{ $comment->user->name }}</strong>
                  <p>{{ $comment->description }} {{$comment->id}}</p>
                </div>
                {{-- Delete --}}
                @if (($comment->user_id) == Auth::id())
                  <div class="d-flex align-items-center">  
                    <form method="POST" action="{{ route('feedback.destroy',  $comment->id) }}" class="delete-form">
                      @csrf
                      @method('DELETE')
                      <input type=submit class="" value="Delete" />
                    </form>
                  </div>
                @endif
              @endforeach
              <hr />
              {{-- @if (($comment->) == Auth::id()) --}}
              <h4>Add comment</h4>

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
              {{-- @endif --}}
          </div>
      </div>
  </div>
</div>     
</div>
@include("layout.home.footer")

@endsection