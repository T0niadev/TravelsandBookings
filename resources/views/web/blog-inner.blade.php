@extends('web.master')

@section('content')

	<section>



<div class="rows inner_banner inner_banner_4">
	<div class="container">
	<h2><span>{{$blogs->title}}</span> </h2>
		<ul>
			<li><a href="#inner-page-title">Home</a>
			</li>
			<li><i class="fa fa-angle-right" aria-hidden="true"></i>
 </li>

		</ul>
		<!-- <p>Book travel packages and enjoy your holidays with distinctive experience</p> -->
	</div>
</div>
</section>

	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
				<!--===== POSTS ======-->
				<div class="rows">

					<div class="posts">
						<div class="col-md-6 col-sm-6 col-xs-12"> <img src="{{asset($blogs->blogspath())}}" width="540px" height="347px" alt="" /> </div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<h3>{{$blogs->title}}</h3>
							<h5><span class="post_author">{{$blogs->author}}</span>
							<div class="post-btn">
								<ul>
									<li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
									</li>
									<li><a href="#"><i class="fa fa-instagram ig1"></i> Share On Instagram</a>
									</li>

								</ul>
							</div>
							<p style="width:100%;">

						<?php

						echo strip_tags($blogs->blogs[0]->description);

						// text to html //

						?>
						</p>
					</div>


				</div>
				<!--===== POST END ======-->
			</div>
		</div>
	</section>


	
@endsection('content')
