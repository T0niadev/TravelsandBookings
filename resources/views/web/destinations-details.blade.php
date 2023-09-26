@extends('web.master')

@section('content')


	<section>



		<div class="rows inner_banner inner_banner_4" style="background:url('{{asset($destination->destinationspath())}}') no-repeat center center;background-size:cover;">
			<div class="container">
				<h2><span>{{$destination->des_location->name}} </span> </h2>
				<ul>
					<li><a href="#inner-page-title">Home</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="#inner-page-title" class="bread-acti">>{{$destination->des_location->name}}</a>
					</li>
				</ul>
				<p>Book travel packages and enjoy your holidays with distinctive experience</p>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS - BOOKING ==========-->

	<!--====== TOUR DETAILS ==========-->
	<section>

		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space">
				<div class="col-md-9">
					<!--====== TOUR TITLE ==========-->
					<div class="tour_head">
						<h2>{{$destination->name}}</h2> </div>

						<div class="tour_head1 hotel-book-room">
						<h3>Photo Gallery</h3>
						<div id="myCarousel1" class="carousel slide" data-ride="carousel">

							<!-- Wrapper for slides -->

							<div class="carousel-inner carousel-inner1" role="listbox">

							@foreach($gallery as $pic)

								<div class="item {{$pic->id==$newpic ? 'active' : ''}}" >
								 <img src="{{asset($pic->destinationsimagepath())}}" alt="Chania" style="width=460px;hieght=345px" > </div>



								@endforeach
							</div>
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
							<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
						</div>
					</div>




					<!--====== TOUR DESCRIPTION ==========-->
					<div class="tour_head1">
						<h3>Description</h3>
						<p style="width:100%;">

						<?php

						echo strip_tags($destination->description);

						// text to html //

						?>
						</p>
					</div>
					<!--====== ROOMS: HOTEL BOOKING ==========-->




					<!--====== TOUR LOCATION ==========-->
					<!-- <div class="tour_head1 tout-map map-container">
						<h3>Location</h3>https://blog.hasura.io/installing-php-composer-laravel-on-a-mac-840ed0d9033a
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65326604.22579832!2d97.14507995181312!3d2.0681074195002336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb38ac2a9489%3A0x594a8771c27291f6!2sThe+Mighty+Myanmar+Travel!5e0!3m2!1sen!2smm!4v1535004273815" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div> -->


				</div>
				<div class="col-md-3 tour_r">

					<!--====== PACKAGE SHARE ==========-->
					<div class="tour_right head_right tour_social tour-ri-com">
						<h3>Share This Package</h3>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
						</ul>
					</div>
					<!--====== HELP PACKAGE ==========-->
					<div class="tour_right head_right tour_help tour-ri-com">
						<h3>Help & Support</h3>
						<div class="tour_help_1">
							<h4 class="tour_help_1_call">Call Us Now</h4>
							<h4><i class="fa fa-phone" aria-hidden="true"></i> 95 9 773899925</h4> </div>
					</div>
					<!--====== PUPULAR TOUR PACKAGES ==========-->
					<div class="tour_right tour_rela tour-ri-com">
						<h3>Popular Packages</h3>
						@foreach($packages as $package)
						<div class="tour_rela_1"> <img src="{{asset($package->packagepath())}}" width="285px" height="115" alt="" />
							<h4>{{$package->name}} {{$package->duration}}</h4>
							<p style="width:100%">
										<?php  $hello = strip_tags($package->short_description);

												echo substr($hello,0,150);

										?>
										 </p>

										 <a href="{{url('/tour-details/'.$package->id)}}" class="link-btn">View this package</a>

						 </div>



						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>



@endsection('content')
