@extends("layout.app")

@section('content')

@include("layout.home.header")

<div class="container mt-5">

<h1 class="title d-flex justify-content-center">Contact</h1>
<!-- form -->

<div class="contact">
    <div class="row">
       	<div class="col-sm-12">
       	    <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.676448158251!2d105.8412638144066!3d21.00560298601093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76ccab6dd7%3A0x55e92a5b07a97d03!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2snp!4v1608089123192!5m2!1svi!2snp" width="100%" height="350" frameborder="0"></iframe>
       	    </div>
		<div class="col-12 contact_form mt-3 d-flex align-items-center flex-column">
                <div>
                <h4>Write to us</h4>
                </div> 		
       		   <div class="col-8">
			    <form role="form">
			        <div class="form-group">	
			            <input type="text" class="form-control" id="name" placeholder="Name">
			        </div>
			        <div class="form-group">
			            <input type="email" class="form-control" id="email" placeholder="Enter email">
			        </div>
			        <div class="form-group">
			            <input type="phone" class="form-control" id="phone" placeholder="Phone">
			        </div>
			        <div class="form-group">
			            <textarea type="email" class="form-control"  placeholder="Message" rows="4"></textarea>
                    </div>
                    <div class=" d-flex align-items-center flex-column">
                    <button type="submit" class="btn btn_default ">Send</button>
                    </div>
                </form>
                </div>
       	</div>
       </div>
</div>
</div>
<!-- form -->
</div>

@include("layout.home.footer")

@endsection