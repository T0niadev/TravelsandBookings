@extends('web.master')

@section('content')

<section>
        <div class="tourz-search">
            <div class="container">
                <div class="row">
                    <div class="tourz-search-1">
                        <h1>Flawless Experience for You!</h1>
                        <p>Go with The Cashew Travelers where you will be greeted with genuine smile by people who really know the country!</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <section style="background-color:#ffece6">
        <div class="rows pad-bot-redu tb-space ">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Tour Packages</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Professionally and passionately create tour packages by well-travelled experts.</p>
                </div>
                <div>

                    @foreach($packages as $package)
                    <!-- TOUR PLACE 1 -->
                    <div class="col-md-5 col-sm-7 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s" id="{{$package->id}}">
                        <!-- OFFER BRAND -->
                        <div class="band"> <img src="#" alt="" /> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="{{asset($package->packagepath())}}" width="377" height="218" alt="Tour Booking" title="Tour Booking" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8" >
                                <h4><a href="{{url('/tour-details/'.$package->id)}}">{{$package->name}}<span class="v_pl_name">({{$package->package_location->name}})</span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset('web/images/clock.png')}}" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('web/images/info.png')}}" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('web/images/price.png')}}" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('web/images/map.png')}}" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


        @endforeach


    </section>


    <section>
        <div class="offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">STILL KEEPING THE BEST SERViCES</span>
						<span class="ol-3"></span> <span class="ol-5">For You</span>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="0.5s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{asset('web/images/icon/a17.png')}}" alt="">
									</a><span>Tailored Tours</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.7s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{asset('web/images/icon/icon4.png')}}" alt=""> </a><span>Group Tours</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.9s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{asset('web/images/icon/1600.png')}}" alt=""> </a><span>Ticketing</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.1s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{asset('web/images/icon/66.png')}}" alt=""> </a><span>Cruises</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.3s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{asset('web/images/icon/a16.png')}}" alt=""> </a><span>Car Rentals</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-r">
                            <div class="or-1"> <span class="or-11">go</span> <span class="or-12">FEEL</span> </div>
                            <div class="or-2"> <span class="or-21">Get</span> <span class="or-22">New</span> <span class="or-23">Experience</span> <span class="or-24">Now</span> <span class="or-25"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== POPULAR TOUR PLACES ==========-->
    <section>



        <div class="rows pla pad-bot-redu tb-space">
            <div class="pla1 p-home container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title spe-title-1">
                    <h2>Top <span>Destinations</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Each destination can give you the different tastes.</p>
                </div>


                <div class="popu-places-home">
                    <!-- POPULAR PLACES 1 -->
                    @foreach($destination as $place)
                    <div class="col-md-4 col-sm-12 col-xs-12 place">
                        <div class="col-md-12 col-sm-12 col-xs-12"> <img src="{{asset($place->destinationspath())}}"  width="234" height="210"  alt="" /> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h3><span>{{$place->name}}</span></h3>
                            <p style="width:100%">
										<?php  $hello = strip_tags($place->description);

												echo substr($hello,0,150);

										?>
										 </p> <a href="{{url('/destinations-details/'.$place->id)}}" class="link-btn">more info</a> </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>
    </section>

    <section style="background-color:#ffece6">
        <div class="rows pad-bot-redu tb-space ">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Trending<span>Travel Stories</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>catch up with the latest travel stories</p>
                </div>
                <div>

                    @foreach($blogs as $blog)

					<div class="posts">
						<div class="col-md-6 col-sm-6 col-xs-12"> <img src="{{asset($blog->blogspath())}}" width="540px" height="347px" alt="" /> </div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<h3>{{$blog->title}}</h3>
							{{-- <h5><span class="post_author">Author: {{$blog->author}}</span><span class="post_date">{{$blog->updated_at}}</span> --}}
                                {{-- <span class="post_city">City: Illunois</span></h5> --}}
							<p style="width:100%">

								<?php  $hello = strip_tags($blog->blogs[0]->description);

										echo substr($hello,0,150);

								?>

							</p>
							 <a href="{{url('/blog-inner/'.$blog->id)}}" class="link-btn">Read more</a> </div>
					</div>

					@endforeach


    </section>

    <section class="md-4" style="background-color: #d7e5f0">
		<div class="rows inn-page-bg com-colo" style="background-color: #d7e5f0">
			<div class="container tb-space inn-page-con-bg pad-bot-redu" style="background-color: #d7e5f0"id="inner-page-title">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Customer <span>Testimonials</span></h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>We started our work with this morning caffeins.</p>
				</div>
				<div class="p_testimonial">
					<!--====== TESTIMONIALS ======-->
					@foreach($testimonials as $test)
					<div class="col-md-6">
						<div class="p-tesi">
                            <div class="col-md-9 col-sm-9">


								<p>{{$test->description}}</p> <address>{{$test->name}}</address>

</div>
						</div>
					</div>
					@endforeach
					<!--====== TESTIMONIALS ======-->
					<!--====== TESTIMONIALS ======-->

				</div>
			</div>
		</div>
	</section>





@endsection('content')
