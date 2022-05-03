 @extends('frontend.layouts.master') 
 @section('title', $blog->title) 
 @section('description', $blog->brief_description) 
 @section('content')
 <main>
  <section>
    <div class="container py-6">
      <div class="row justify-content-md-center">
        <div class="col-sm-10">
          <h1 class="massive in-top">{{$blog->title}}</h1>
        </div>
      </div>
      <div class="row mt-5 justify-content-md-center">
        <div class="col-sm-10 in-left"> 
          <hr class="to-right">
          <div class="grey">{{$blog->created_at}}</div>
        </div>
      </div>
    </div>
    <div class="container py-6">
      <div class="row justify-content-md-center in-top">
        <div class="col-sm-6">
          {!! $blog->description !!}
        </div>
      </div>
    </div><img class="img-fluid vw-100" alt="{{$blog->title}}" src="{{$blog->image}}">
  </section>
  <section class="border-bottom">   
    <div class="container py-6">
      <div class="row justify-content-md-center">
        <div class="col-sm-6">

          {!! $blog->description_two !!}
          <img class="mt-2 mb-4 img-fluid vw-100" alt="{{$blog->title}}" src="{{$blog->imagetwo}}">

          {!! $blog->description_three !!}
        </div>
      </div>
    </div>
  </section> 
</main>

@endsection