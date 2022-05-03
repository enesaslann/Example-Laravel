@extends('frontend.layouts.master') 
@section('content') 
<main>
	<section class="pt-0 border-bottom">
		<div class="container pb-5">
			<div class="row pt-5 vh-50 d-lg-flex align-items-end justify-content-end">
				<div class="col-sm-6">
					<h1 class="massive in-left">
						<span class="d-block">{{$project->category}}</span><span class="d-block"></span>
					</h1>
				</div>
				<div class="col-sm-5 offset-sm-1 in-top"> 
					<p>{{$project->title_description}}</p>
				</div>
			</div>
		</div>
		<img class="img-fluid vw-100" alt="Neoto - Creative Studio Portfolio Template" src="{{$project->image}}">
		<div class="container py-6">
			<div class="row">
				<div class="offset-sm-2 col-sm-8">
					<h3>{{$project->one_title}}</h3>
					<p>
						{!!$project->one_description!!}
					</p>
					<a class="lightbox" href="images/project8.jpg">
						<img class="w-100 img-fluid mt-5" alt="Neoto - Creative Studio Portfolio Template" src="{{$project->image_two}}">
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="offset-sm-3 col-sm-6">
					<h3>{{$project->two_title}}</h3>
					<p>
						{!!$project->two_description!!}
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<a class="lightbox" href="images/project9.jpg">
				<img class="w-100 img-fluid my-5" alt="Neoto - Creative Studio Portfolio Template" src="{{$project->image_three}}">
			</a>
			<div class="row py-6">
				<div class="offset-sm-3 col-sm-6"> 
					<p>
						{!!$project->three_description!!}
					</p>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col-sm-6">
					<a class="lightbox" href="images/project10.jpg">
						<img class="w-100 img-fluid my-5" alt="Neoto - Creative Studio Portfolio Template" src="{{$project->image_four}}">
					</a>
				</div>
				<div class="col-sm-6">
					<a class="lightbox" href="images/project10.jpg">
						<img class="w-100 img-fluid my-5" alt="Neoto - Creative Studio Portfolio Template" src="{{$project->image_five}}">
					</a>
				</div> 
			</div>
		</div>
	</section>
</main>
@endsection