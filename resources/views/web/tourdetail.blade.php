@extends('web.master')


@section('content')



<!--====== BANNER ==========-->
<section>


<div class="rows inner_banner inner_banner_4" style="background:url('{{asset($packages->packagepath())}}') no-repeat center center;background-size:cover;">
<div class="container">
<h2><span>{{$packages->package_location->name}} -</span> {{$packages->name}}</h2>
<ul>
<li><a href="#inner-page-title">Home</a>
</li>
<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
<li><a href="#inner-page-title" class="bread-acti">{{$packages->package_location->name}}</a>
</li>
</ul>
<p>Book travel packages and enjoy your holidays with distinctive experience</p>
</div>
</div>
</section>
<!--====== TOUR DETAILS - BOOKING ==========-->
<section>
<div class="rows banner_book" id="inner-page-title">
<div class="container">
<div class="banner_book_1">
<ul>
<li class="dl1">Location : {{$packages->package_location->name}}</li>
<!-- <li class="dl2">Price : $ {{$packages->price}}</li> -->
<li class="dl3">Duration : {{$packages->duration}}</li>
<li class="dl4"><a href="{{url('/booking/'.$packages->id)}}" class="hidden-xs" >Book Now</a> </li>
</ul>
</div>
</div>
</div>
</section>
<!--====== TOUR DETAILS ==========-->
<section>

<div class="rows inn-page-bg com-colo">
<div class="container inn-page-con-bg tb-space">
<div class="col-md-9">
<!--====== TOUR TITLE ==========-->


<div class="tour_head">
<h2>{{$packages->name}}</h2> </div>
<!--====== TOUR DESCRIPTION ==========-->

<!--====== ROOMS: HOTEL BOOKING ==========-->

<div class="tour_head1 hotel-book-room">
<h3>Photo Gallery</h3>
<div id="myCarousel1" class="carousel slide" data-ride="carousel">


<div class="carousel-inner carousel-inner1" role="listbox">

@foreach($packagesgallery as $pic)

<div class="item {{$pic->id==$newgallery ? 'active' : ''}}" >
<img src="{{asset($pic->gallerypath())}}" width:460px hieght:345px alt="Chania">
</div>


@endforeach
</div>
<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" style="margin-left:20%;margin-top:175%;" aria-hidden="true"></i></span> </a>
<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1"   aria-hidden="true"></i></span> </a>
</div>
</div>
<!--====== TOUR LOCATION ==========-->

<!--====== ABOUT THE TOUR ==========-->
<!--====== DURATION ==========-->
<div class="tour_head1 l-info-pack-days days">
<h3>Detailed Day Wise Itinerary</h3>
<ul>
@foreach($days as $day)
<li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
<h4><span style="color:#df3b77;">{{$day->name}}</h4>
<p style="text-align:justify;width:100%;color:#000;">

<?php
echo html_entity_decode($day->description);
// html to html text covert //

?>

</p>
</li>
@endforeach
</ul>
</div>

<div class="tour_head1">
<h3>Services</h3>
<p style="width:100%;color: #f4364f;">
<?php
echo html_entity_decode($packages->service);
// html to html text covert //

?></p>
</div>

</div>
<br>
<div class="tour_right head_right tour_help tour-ri-com">
<h3>Review</h3>
<div class="tour_help_1">

	<form method="Post" action="{{ url('/tour-details/'.$packages->id.'/review') }}" name="post" enctype="multipart/form-data">
						{{ csrf_field() }}

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

							<input type="hidden" name="tour_packages_id" class="form-control" placeholder="Name..." value="{{$packages->id}}">

						</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

							<input type="text" name="name" class="form-control" placeholder="Name...">
							<p class="text-danger">{{ $errors->first('name') }}</p>
						</div>

						<div class="form-group {{ $errors->has('education') ? 'has-error' : '' }}">

						<textarea name="message" placeholder="Message ..."></textarea>
							<p class="text-danger">{{ $errors->first('message') }}</p>


                        </div>

                          <button type="submit" style="margin-right:73%;" class="btn btn-success">Post</button>
</form>



</div>



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
<h4><i class="fa fa-phone" aria-hidden="true"></i>08189505050</h4> </div>
</div>
<!--====== PUPULAR TOUR PACKAGES ==========-->
<div class="tour_right tour_rela tour-ri-com">
<h3>Other Packages</h3>
@foreach($otherpackages as $package)
<div class="tour_rela_1"> <img src="{{asset($package->packagepath())}}" width="285px" height="115" alt="" />

<a href="{{url('/tour-details/'.$package->id)}}">

<h4>{{$package->name}} ({{$package->duration}}) </h4>

</a>


<p style="width:100%;color:black;" >
<?php  $hello = strip_tags($package->short_description);

echo substr($hello,0,150);

?>
</p>

<a href="{{url('/tour-details/'.$package->id)}}" class="link-btn">View this package</a>

</div>



@endforeach
</div>


</section>
<!--====== TIPS BEFORE TRAVEL ==========-->





@endsection('content')
