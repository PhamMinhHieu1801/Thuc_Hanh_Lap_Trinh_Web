<section class="container">
  <div class="d-flex row justify-content-around card-deck">
  @foreach ($hotels as $hotel)
            <div class=" card  mt-2 ml-1" style="width:300px; height:370px;" >
              @if ($hotel->image==NULL)
                <img class="card-img-top" style="width:360px; height:300px;" src="{{ URL::asset('storage/Image/hotel/hotel1.jpg') }}"  alt="Card image cap">
              @endif
              @if ($hotel->image!=NULL)
              <img class="card-img-top" style="width:360px; height:300px;" src="{{ asset($hotel->image) }}" alt="Card image cap">
              @endif
                <div class="caption mt-3">
                  <b class=" ml-1  pr-3">{{ $hotel->name}}</b>
                  <a href="{{ route('list_room', $hotel->id)}}"  class="pull-right ml-5 pl-3">
                    <i class="fa fa-edit"></i></a>
                </div>
            </div>
           
         
          @endforeach
        </div>
        <div class="d-flex row justify-content-around card-deck mt-5">
          @foreach ($hotel1 as $hotel)
            <div class=" card  mt-2 ml-1" style="width:300px; height:400px;" >
              @if ($hotel->image==NULL)
                <img class="card-img-top" style="width:360px; height:300px;" src="{{ URL::asset('storage/Image/hotel/hotel1.jpg') }}"  alt="Card image cap">
              @endif
              @if ($hotel->image!=NULL)
              <img class="card-img-top" style="width:360px; height:300px;" src="{{ asset($hotel->image) }}" alt="Card image cap">
              @endif
                <div class="caption mt-3">
                  <b class=" ml-1  pr-3">{{ $hotel->name}}</b>
                  <a href="{{ route('list_room', $hotel->id)}}"  class="pull-right ml-5 pl-3">
                    <i class="fa fa-edit"></i></a>
                </div>
            </div>
         
          @endforeach
          </div>
      
</section>
