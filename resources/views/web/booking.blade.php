@extends('web.master')

@section('content')

<section>
<div class="rows inner_banner inner_banner_4" style="background:url('{{asset($package->packagepath())}}') no-repeat center center;background-size:cover;">
	<div class="container">
	<h2 ><span style="color:#f4364f;">{{$package->name}}</span> </h2>
		<ul>
			<li><a href="/">Home</a>
			</li>
			<li><i class="fa fa-angle-right" aria-hidden="true">{{$package->package_location->name}}</i>
 </li>

		</ul>
		<!-- <p>Book travel packages and enjoy your holidays with distinctive experience</p> -->
	</div>
</div>
</section>


	<!--DASHBOARD-->
	<section>
		<div class="db">
			<!--LEFT SECTION-->
			<div class="db-l">


			</div>
			<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4 style="text-align:center;"> Booking</h4>



					<div class="db-2-main-com">
					<form method="Post" action="{{ url('/booking/store')}}" name="post" enctype="multipart/form-data">
{{ csrf_field() }}
							<div class="row">
								<div class="input-field col s8" style="margin-left:15%">
									<input type="text" id="username" name="username" class="autocomplete validate" style="height:40px;padding:18px;">
									<label for="username">Username</label>
									<p class="text-danger">{{ $errors->first('username') }}</p>
								</div>
								<div class="input-field col s8" style="margin-left:15%">
									<input type="email" name="email" class="autocomplete validate" style="height:40px;padding:18px;" >
									<label for="email">Email</label>
									<p class="text-danger">{{ $errors->first('email') }}</p>
								</div>
								<div class="input-field col s8" style="margin-left:15%">
									<input type="text" name="from" class="autocomplete validate" style="height:40px;padding:18px;" >
									<label for="from">Where are you come from?</label>
									<p class="text-danger">{{ $errors->first('from') }}</p>
								</div>


							</div>
							<div class="row">
								<div class="input-field col s8" style="margin-left:15%">
								<textarea name="address" style="height:80px" class="autocomplete validate" ></textarea>
									<label for="address">Details</label>
									<p class="text-danger">{{ $errors->first('address') }}</p>
								</div>
								<div class="input-field col s8" style="margin-left:15%">
									<input type="tel" name="phone" style="height:40px;padding:18px;">
									<label for="phone">Phone</label>
									<p class="text-danger">{{ $errors->first('phone') }}</p>
								</div>

								<div class="input-field col s8" style="margin-left:15%">
								<input type="hidden"  class="autocomplete validate" name="tour_packages_id" value="{{$id}}" style="height:40px;padding:18px;">
								</div>

								<div class="input-field col s8" style="margin-left:15%">
									<input type="number" name="quantity" class="autocomplete validate" style="height:40px;padding:18px;">
									<label for="quantity">Quantity</label>
									<p class="text-danger">{{ $errors->first('quantity') }}</p>
								</div>

							</div>

							<div class="row">
							<div class="input-field col s8" style="margin-left:15%">
									<input type="text" id="bdate"  name="date" style="height:40px;padding:18px;">
									<label for="bdate">Date</label>
									<p class="text-danger">{{ $errors->first('date') }}</p>

									<button type="submit" class="btn btn-success" >Book</button>

							<a href="/tour-package" class="btn btn-primary">Back</a>
								</div>


								</div>

						</form>


					</div>
				</div>
			</div>
			<!--RIGHT SECTION-->
			<div class="db-3" >
				<h4>Trip Information</h4>
				<ul>
					<li>
					<a href="#!">
							<h5>Package Name : {{$package->name}}
								</h5>
							<!-- <p>All the Lorem Ipsum generators on the</p> -->
					</a>

					</li>
					<li>

					<a href="#!">
							<h5>Duration : {{$package->duration}}</h5>
							<!-- <p>All the Lorem Ipsum generators on the</p> -->
					</a>
					</li>
					<li>
					<a href="#!">

							<h5>Location : {{$package->package_location->name}}</h5>
							<!-- <p>All the Lorem Ipsum generators on the</p> -->

					</a>

					</li>
					<li>
					<a href="#!">
							<h5>Tour Leader : {{$package->tour_leader->name}}</h5>
							<!-- <p>All the Lorem Ipsum generators on the</p> -->

							</a>

					</li>


				</ul>




			</div>




		</div>
	</section>


	
@endsection('content')

