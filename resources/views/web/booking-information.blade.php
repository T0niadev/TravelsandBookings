@extends('web.master')

@section('content')


	<!--DASHBOARD-->
	<section>
		<div class="db">
			<!--LEFT SECTION-->
			<div class="db-l">


			</div>
			<!--CENTER SECTION-->
					<div class="col-md-12">
					<div class="col-md-3"></div>
					<div class="col-md-6" style="background:white;" >
                    <h2 style="text-align:center;"> Thank You! <span class="fa fa-check-circle" style="color:green;"></span>  </h2>
                    <br>


                        <p  style="text-align:center;"><strong >Your Booking is Successfully Received! <br> We'll contact you soon thank you for interesting.</p> </strong>

								<div class="col-md-12" style="border-radius: 10px;border-style: groove;color:#e1386d">

								<h4 > Name  : 	{{$bookings->username}}</h4>
								<h4 > Email : 	{{$bookings->email}}</h4>
								<h4 > Where are you come from  : 	{{$bookings->from}}</h4>
								<h4 > Phone  : 	{{$bookings->phone}}</h4>
								<h4 > Details  : 	{{$bookings->address}}</h4>
								<h4 > Package Name  : 	{{$package->name}}</h4>
								<h4 > Duration  : 	{{$package->duration}}</h4>
								<h4 > Location  : 	{{$package->package_location->name}}</h4>
								<h4 > Date  : 	{{$bookings->date}}</h4>
								<h4 > Tour Leader  : 	{{$package->tour_leader->name}}</h4>
								<h4 > Total Members  : 	{{$bookings->quantity}}</h4>
								<h4 > Payment Status  : 	<span class="db-not-done">{{$bookings->status}}</span></h4>

								</div> <br><br>
								<hr>
								<br>
								<br>
								<br>


					<span class="fa fa-reply-all"></span> <a href="/" >Back to the home page</a>


					</div>

					<div class="col-md-3"></div>

					</div>


			</div>



		</div>
	</section>
	<!--END DASHBOARD-->

	

@endsection('content')

