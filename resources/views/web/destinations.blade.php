@extends('web.master')

@section('content')

<section>
<div class="rows inner_banner inner_banner_1" style="background-position:bottom;">
<div class="container">
<h2> Your Top Sight Seeing Places</h2>
<ul>
<li><a href="#inner-page-title">Home</a>
</li>
<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
<li><a href="#inner-page-title" class="bread-acti">Sight Seeing</a>
</li>
</ul>
<p>Each destination can give you the different tastes.</p>
</div>
</div>
</section>
<!--====== PLACES ==========-->
<section>
<div class="rows inn-page-bg com-colo">
<div class="container inn-page-con-bg tb-space pad-bot-redu" id="inner-page-title">
<!-- TITLE & DESCRIPTION -->
<div class="spe-title col-md-12">
<h2>Top <span>Sight Seeings</span></h2>
<div class="title-line">
<div class="tl-1"></div>
<div class="tl-2"></div>
<div class="tl-3"></div>
</div>
<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
</div>



@foreach($destinations as $des)
<div class="col-md-4 col-sm-6 col-xs-12 b_packages">

<div class="v_place_img"><img src="{{asset($des->destinationspath())}}" width=350 height=200 alt="Tour Booking" title="Tour Booking" /> </div>
<div class="b_pack rows">
<div class="col-md-8 col-sm-8">
<h4><a href="{{url('/destinations-details/'.$des->id)}}">{{$des->des_location->name}}<span class="v_pl_name">(UAE)</span></a></h4> </div>
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


<!--====== PACKAGE ==========-->
</div>
<div class="row">
<div class="text-center">

					<?php echo $destinations->render();

					?>

				</div>
				</div>
</div>
</div>
</div>
</section>
<!--====== TIPS BEFORE TRAVEL ==========-->



@endsection('content')
