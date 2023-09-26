@extends('web.master')

@section('content')
<style>

.widWRLData {

	padding: 1px 10px 15px !important;

}

</style>


<!--====== LOCATON ==========-->
<section>
<div class="rows contact-map map-container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.456259681645!2d96.12855121398454!3d16.803706588430916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb38ac2a9489%3A0x594a8771c27291f6!2sThe+Mighty+Myanmar+Travel!5e0!3m2!1sen!2smm!4v1536563437850" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	</section>
	<!--====== QUICK ENQUIRY FORM ==========-->



	<section>
		<div class="tr-register">
			<div class="tr-regi-form v2-search-form">
				<h4>Contact Us </h4>
				<!-- <p>It's free and always will be.</p> -->

					@if (session('alert'))
	<div class="alert alert-success">
	{{ session('alert') }}
	</div>
	@endif

				<form method="Post"  action="{{url('/contact-us/store')}}" name="post" enctype="multipart/form-data">
	{{ csrf_field() }}
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="select-city-1" name="name" class="autocomplete validate">
									<label for="select-city-1">Name</label>
								</div>
								<div class="input-field col s12">
								<input type="email" id="select-city-1" name="email" class="autocomplete validate">
									<label for="select-city-1">Email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" name="subject" class="autocomplete validate" >
									<label for="subject">Subject</label>
								</div>
								<div class="input-field col s12">
								<textarea name="message" class="autocomplete validate" ></textarea>
									<label for="message">Message</label>
								</div>
							</div>

							<div class="row">
								<div class="input-field col s12">
								<button type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> <h4>Submit</h4> </button>
								</div>
							</div>
						</form>
			</div>
		</div>
	</section>




	
@endsection('content')
