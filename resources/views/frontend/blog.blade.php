 @extends('frontend.layouts.master') 
 @section('content')
 <main>
  <section>
    <div class="container-fluid py-6">
      <h1 class="in-top">Blog</h1>
    </div>
    <div class="container-fluid">
      <div class="grid" style="padding-bottom: 100px;">
        <div class="grid-sizer col-1"></div>
        @foreach($blogs as $entry)
        <a class="grid-item col-4" href="{{route('front.blog.detail', $entry->slug)}}">
          <img alt="Neoto - Creative Studio Portfolio Template" src="{{$entry->cover_image}}">
          <div class="caption p-3">
            <div class="title">{{$entry->title}}</div>
          </div>
        </a> 
        @endforeach
      </div>
    </div> 
  </section>
</main>

@endsection