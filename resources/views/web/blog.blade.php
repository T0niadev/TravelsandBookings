@extends('web.master')

@section('content')

	<section>
		<div class="rows inner_banner inner_banner_1" style="background:url('../../theme/blog-page-background.png');background-position:bottom;">
			<div class="container">
				<h2><span>The Blog </span>for your travel inspirations</h2>
				<ul>
					<li><a href="#inner-page-title">Home</a> </li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="#inner-page-title" class="bread-acti">Blog Posts</a> </li>
				</ul>
				<p>Explore the exciting stories about travelling with the Cashew travelers</p>
			</div>
		</div>
	</section>
	<!--====== ALL POST ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title col-md-12">
					<h2> Tour <span>Blog</span> Posts</h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>Authenic Blog for you about travelling in Myanmar</p>
				</div>
				<!--===== POSTS ======-->
				<div class="rows">

					@foreach($blogs as $blog)

					<div class="posts">
						<div class="col-md-6 col-sm-6 col-xs-12"> <img src="{{asset($blog->blogspath())}}" width="540px" height="347px" alt="" /> </div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<h3>{{$blog->title}}</h3>
							<h5><span class="post_author">Author: {{$blog->author}}</span><span class="post_date">{{$blog->updated_at}}</span>
                                {{-- <span class="post_city">City: Illunois</span></h5> --}}
							<p style="width:100%">

								<?php  $hello = strip_tags($blog->blogs[0]->description);

										echo substr($hello,0,150);

								?>

							</p>
							 <a href="{{url('/blog-inner/'.$blog->id)}}" class="link-btn">Read more</a> </div>
					</div>

					@endforeach

				</div>


				<div class="text-center">

				<?php echo $blogs->render();

				?>

		</div>

				<!--===== POST END ======-->
			</div>
		</div>
	</section>



@endsection('content')
