@extends("layout.app")

@section('content')

@include("layout.home.header")

<div class="container mt-5 mb-5">

<h1 class="title d-flex justify-content-center mb-4">Edit User</h1>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.676448158251!2d105.8412638144066!3d21.00560298601093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76ccab6dd7%3A0x55e92a5b07a97d03!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2snp!4v1608089123192!5m2!1svi!2snp" width="100%" height="350" frameborder="0"></iframe>
</div>
	<div class="row mt-3 d-flex justify-content-evenly container">
		<div class=" ml-5 pl-4 profile col-4 d-flex flex-column ">
			<div class=" ml-5 pl-2 mb-2">
				<h4 style="margin-left: 29px;">Profile</h4>
			</div>
			<div class ="image mb-3">
				@if(Auth::user()->avatar!=NULL)
					<img src="{{ asset (Auth::user()->avatar)}}" style="width:230px; height:230px;float:left; border-radius:50% ; margin-right: 50px;" >
				@endif
				@if(Auth::user()->avatar==NULL)
					<img src="{{ URL::asset('storage/Image/user/avatar.jpg')}}" style="width:230px; height:230px;float:left; border-radius:50% ; margin-right: 50px;" >
				@endif
			</div>
			<div class="user-name d-flex justify-content-center flex-column align-items-center" style="margin-left:-84px">
				<h6> {{ Auth::user()->name}} </h6>
				<p style="border-bottom: 1px solid #DCDCDC;"> {{ Auth::user()->email }}</p>
			</div>
			<div class="phone" style="">
				<p style="border-bottom: 1px solid #DCDCDC;" ><img src="{{ URL::asset('storage/Image/phone.png')}}" class="mr-2">  {{ Auth::user()->phone}}</p>
				<p style="border-bottom: 1px solid #DCDCDC;"><img src="{{ URL::asset('storage/Image/birthday.png')}}" class="mr-2">  {{ Auth::user()->birthday}}</p>
			</div>
			
		</div>		

       		<div class="col-6 ml-5">
				   <h4 style="margin-left: 200px;" class="mb-4"> Edit User</h4>
				<form action="{{ route('user_update', Auth::id()) }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<h6>User's Name</h6>
						<input class="form-control" name="name" value="{{ Auth::user()->name }}" placeholder="Insert your name"/>
						@if ($errors->has('name'))
							<div class="alert alert-danger">
								{{ $errors->first('name') }}
							</div>
						@endif
					</div>
					<div class="form-group">
						<h6>Your Password</h6>
						<input class="form-control" name="password" value="{{ Auth::user()->password }}" placeholder="Insert your hotel's local"/>
						@if ($errors->has('password'))
							<div class="alert alert-danger">
								{{ $errors->first('password') }}
							</div>
						@endif
					</div>
					<div class="form-group">
						<h6>Your Phone</h6>
						<input class="form-control" name="phone" value="{{ Auth::user()->phone }}" placeholder="Insert your phone"/>
					</div>
					<div class="form-group">
						<h6>Birthday</h6>
						<input type="date" class="form-control" value="{{ Auth::user()->birthday }}" placeholder="birthday" name="birthday" >
					</div>
					<div class="form-group">
						<h6 for="avatar">Avatar</h6> 
						<input id="avatar" class="ml-5 pl-3" name="avatar" placeholder="avatar" type="file">
					</div>
                    <div class=" d-flex align-items-center flex-column">
                    <button type="submit" class="btn btn_default mt-3">Send</button>
                    </div>
                </form>
                </div>
       		</div>
	</div>
@include("layout.home.footer")

@endsection