@extends('web.master')


@section('content')


	<!--====== BANNER ==========-->
	<section>
		<div class="rows inner_banner inner_banner_1" style="background:url('../../theme/about-us-header.jpg') no-repeat center center;background-size:cover;">
			<div class="container">
				<h2><span>Our Team-</span> Different personalities,same goal</h2>
				<ul>
					<li><a href="#inner-page-title">Home</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="#inner-page-title" class="bread-acti">Our Team</a>
					</li>
				</ul>
				<p>A team formed of travel& tech people</p>
			</div>
		</div>
	</section>
	<!--====== ALL TESTIMONIALS ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container tb-space inn-page-con-bg pad-bot-redu" id="inner-page-title">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Our <span>Team Members</span></h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>We are ready to support and advice for your holiday in Myanmar with an unbeatable effort and focus.</p>
				</div>

				<div class="p_testimonial">
				@foreach($teamone as $team)
					<div class="col-md-12">
						<h2 style="margin-left:3%;">{{$team->name}}</h2>


						@foreach($team->member as $our)

							<div class="col-md-3">
							<div class="col-md-12 col-sm-3"> <img src="{{asset($our->ourteam())}}" class="img-responsive" style="width:100%;" alt=""> </div>
							<div class="col-md-12 col-sm-9">

								<h4 class="text-center" >{{$our->name}}</h4>
								<h5 class="text-center" >{{$our->role}}</h5>

						</div>
					</div>



					@endforeach


				</div>

				@endforeach
			</div>

		</div>
	</section>

	
@endsection('content')
