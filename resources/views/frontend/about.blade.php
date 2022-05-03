@extends('frontend.layouts.master') 
@section('content')

<main>
    <div class="jumbotron jumbotron-fluid vh-75 d-flex align-items-center bg-dark text-white">
        <div class="bg o-4" style="background-image:url({{$about->cover_image}});"></div>
        <div class="container text-center">
            <div class="row">
              <div class="col-12">
                <h1 class="massive">{{$about->title}}</h1>
            </div>
            <div class="col-12 col-md-7 mx-auto pt-5">
                <h2 class="o-7">{{$about->title_description}}</h2>
            </div>
        </div>
    </div>
</div>
<section class="border-bottom py-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 py-3">
        <div class="size-4 mb-2">
          <img src="{{$about->one_list}}" style="height:100px; width: auto; object-fit: fill;">
      </div>
      <h3 class="mb-4">{{$about->one_list_title}}</h3>
      <p>
        {{$about->one_list_description}}
    </p>
</div>
<div class="col-sm-4 py-3">
    <div class="size-4 mb-2">
        <img src="{{$about->two_list}}" style="height:100px; width: auto; object-fit: fill;">
    </div>
    <h3 class="mb-4">{{$about->two_list_title}}</h3>
    <p>
        {{$about->two_list_description}}
    </p>
</div>
<div class="col-sm-4 py-3">
    <div class="size-4 mb-2">
      <img src="{{$about->three_list}}" style="height:100px; width: auto; object-fit: fill;">
  </div>
  <h3 class="mb-4">{{$about->three_list_title}}</h3>
  <p>
    {{$about->three_list_description}}
</p>
</div>
</div>
</div>
</section> 
<div class="container">
  <div class="grid">
    <div class="grid-sizer col-1">
    </div>
    <a class="grid-item col-12" href="javascript:;">
        <img alt="Neoto - Creative Studio Portfolio Template" src="{{$about->image}}">
    </a>

</div>
</div>
<div class="container mt-5">
  <h5 class="pb-4 mb-0">{{$about->title_two}}</h5>
</div>
<div class="container pb-5">
  <div class="row">
    <div class="col-sm-9" style="margin-bottom: 100px;">
      <blockquote>
        <p>{!!$about->description!!}</p>
    </blockquote>
</div>
</div>
</div> 
</main>

@endsection