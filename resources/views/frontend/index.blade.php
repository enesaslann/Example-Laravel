@extends('frontend.layouts.master') 
@section('content')  

<main>
  <div class="glide slider">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        @foreach($slider as $entry)
        <li class="glide__slide invert">
          <div class="jumbotron jumbotron-fluid vh-100 d-flex align-items-center">
            <div class="bg o-8" style="background-image:url({{$entry->image}})">
            </div>
            <div class="container-fluid py-6">
                <a class="tilt no-link mx-auto" href="{{$entry->link}}">
                    <h6>{{$entry->title}}</h6>
                    <h1 class="massive pt-2">
                        <span class="d-block">{{$entry->description}}</span> 
                    </h1>
                </a>
            </div>
        </div>
    </li> 
    @endforeach 

</ul>
</div> 
</div>
</main>
@endsection