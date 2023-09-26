@extends('web.master')

@section('content')


<!-- TOP SEARCH BOX -->

    <!--END HEADER SECTION-->

	<!--====== HOTELS LIST ==========-->
	<section class="hot-page2-alp hot-page2-pa-sp-top">
		<div class="container">
			<div class="row inner_banner inner_banner_3 bg-none"   style="background-position:top;">
				<div class="hot-page2-alp-tit">
					<h1>Top Travel Packages</h1>
					<ul>
						<li><a href="#inner-page-title">Home</a> </li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
						<li><a href="#inner-page-title" class="bread-acti">Packages</a> </li>
					</ul>
					<p>Professionally and passionately create tour packages by well-travelled experts. </p>
				</div>
			</div>
			<div class="row">
				<div class="hot-page2-alp-con">
					<!--LEFT LISTINGS-->
					<div class="col-md-3 hot-page2-alp-con-left">
						<!--PART 1 : LEFT LISTINGS-->
						<div class="hot-page2-alp-con-left-1">
							<h3>Other Destinations</h3> </div>
						<!--PART 2 : LEFT LISTINGS-->
						<div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
							<ul>
								<!--LISTINGS-->
								@foreach($destinations as $des)
								<li>
									<a href="{{url('/destinations-details/'.$des->id)}}">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="{{asset($des->destinationspath())}}" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>{{$des->name}}</h5> <span>

											<?php  $hello = strip_tags($des->description);

										echo substr($hello,0,100);

								?>

											</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"></div>
									</a>
								</li>
								<!--LISTINGS-->
								@endforeach

							</ul>
						</div>

						<div class="hot-page2-alp-con-left-1">
							<h3>Blog Posts</h3> </div>
						<!--PART 2 : LEFT LISTINGS-->
						<div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
							<ul>
								<!--LISTINGS-->

								@foreach($blogs as $blog)
								<li>


									<a href="{{url('/blog-inner/'.$blog->id)}}">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="{{asset($blog->blogspath())}}" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>{{$blog->title}}</h5> <span>

											<?php  $hello = strip_tags($blog->blogs[0]->description);

										echo substr($hello,0,100);

								?>

											 </span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> </div>
									</a>
								</li>
								<!--LISTINGS-->
							@endforeach

							</ul>
						</div>

					</div>
					<!--END LEFT LISTINGS-->
					<!--RIGHT LISTINGS-->
					<div class="col-md-9 hot-page2-alp-con-right">
						<div class="hot-page2-alp-con-right-1">
							<!--LISTINGS-->
							<div class="row">

								@foreach($packages as $package)
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">

											<div class="hot-page2-hli-1"> <img src="{{asset($package->packagepath())}}" width=209 height=130 alt=""> </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="trav-list-bod">
										<a href="{{url('/tour-details/'.$package->id)}}"><h3>{{$package->name}}</h3></a>
										<p style="width:100%">
										<?php  $hello = strip_tags($package->short_description);

												echo substr($hello,0,150);

										?>
										 </p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
											<span class="hot-list-p3-4" style="margin-top:18%;">
												<a href="{{url('/tour-details/'.$package->id)}}" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
									<div>
										<div class="trav-ami hidden-xs hidden-sm">
											<h4>Details</h4>
											<ul>
												<li><img src="{{asset('web/images/icon/a14.png')}}" alt=""> <span>Sightseeing</span></li>
												<li><img src="{{asset('web/images/icon/a15.png')}}" alt=""> <span>Hotel</span></li>
												<li><img src="{{asset('web/images/icon/a16.png')}}" alt=""> <span>Transfer</span></li>
												<li><img src="{{asset('web/images/icon/a18.png')}}" alt=""> <span>{{$package->duration}}</span></li>
												<li><img src="{{asset('web/images/icon/dbl6.png')}}" alt=""> <span>Guide </span></li>
												<li><img src="{{asset('web/images/icon/12.png')}}" alt=""> <span>Meals</span></li>
											</ul>
										</div>
									</div>
								</div>
								@endforeach

								<div class="row">
								<div class="text-center">

								<?php echo $packages->render();

										?>

										</div>
										</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->

							</div>
						</div>
					</div>
					<!--END RIGHT LISTINGS-->
				</div>
			</div>
		</div>
		</div>
	</section>
	<!--====== TIPS BEFORE TRAVEL ==========-->



@endsection('content')


