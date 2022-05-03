@extends('frontend.layouts.master') 
@section('content') 
<main>
	<section>
		<div class="container-fluid py-6">
			<h1>  
				<span class="d-block in-top">{{$portfolio->title}}</span>
			</h1>
		</div>
		<div class="container-fluid">
			<div class="grid gallery">
				<div class="grid-sizer col-1"></div>  
				@foreach($detail as $entry)
				<a class="  grid-item col-3" href="{{route('front.portfolio.detail',$entry->slug)}}">
					<img alt="{{$entry->category}}" src="{{$entry->cover_image}}">
					<div class="caption p-3">
						<div class="title">{{$entry->category}}</div>
					</div>
				</a> 
				@endforeach
			</div>
		</div>
		<div class="container my-5 py-6">
			<div class="row justify-content-md-center text-center">
				<div class="col-sm-8">
					<h3>{{$portfolio->name}}</h3>
					<p>{!! $portfolio->description !!}</p>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection