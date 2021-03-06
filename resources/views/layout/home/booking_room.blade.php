
<h3 class="mb-4" style="margin-left: 120px;">Booking Room</h3>

<form action="{{ route('users_booking.store', $roomDetail->id) }}" method="POST" class="text-center" >
	@csrf
	<div class="form-group">
        <input class="form-control" placeholder="Name" name="name" type="text">
        @if ($errors->has('name'))
							<div class="alert alert-danger">
								{{ $errors->first('name') }}
							</div>
						@endif
    </div>
    <div class="form-group">
        <input class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" type="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Phone" name="phone" type="phone">
        @if ($errors->has('phone'))
							<div class="alert alert-danger">
								{{ $errors->first('phone') }}
							</div>
						@endif
    </div>
    <div class="form-group  ">
        <div class="row">
            <div class="col-xs-6 mr-5 ml-3" >
                <select class="form-control" name="children">
                      <option>
                        No. of Children
                      </option>
                      <option>
                        2
                      </option>
                      <option>
                        3
                      </option>
                      <option>
                        4
                      </option>
                      <option>
                        5
                      </option>
                </select>
            </div>
            <div class="col-xs-6">
                <select class="form-control" name="adult">
                      <option>
                        No. of Adult
                      </option>
                      <option>
                        2
                      </option>
                      <option>
                        3
                      </option>
                      <option>
                        4
                      </option>
                      <option>
                        5
                      </option>
                </select>
            </div>

        </div>
    </div>
    <div class="form-group">
        <h6>Date in</h6>
        <input type="date" class="form-control" placeholder="Date_in" name="date_in" >
        @if ($errors->has('date_in'))
							<div class="alert alert-danger">
								{{ $errors->first('date_in') }}
							</div>
						@endif
    </div>
    <div class="form-group">
        <h6>Date out</h6>
        <input type="date" class="form-control" placeholder="Date_out" name="date_out" >
       
	</div>
	@if (empty($roomDetail->room_booked))
    <div class="form-group rol-2">
        <button class="btn btn-default">Booking</button>
	</div>
	@endif
</form>
@if (session('status'))
<div class="alert alert-info">{{session('status')}}</div>
@endif
          