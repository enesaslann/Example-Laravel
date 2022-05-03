@extends('frontend.layouts.master') 
@section('content')
<main>
  <section class="jumbotron jumbotron-fluid pb-0 bg-dark">
    <div class="bg o-5" style="background-image:url({{asset('assets/images/contact.jpg')}});"></div>
    <div class="container text-white py-5">
      <div class="row">
        <div class="col-lg-8 offset-lg-2"> 
          <h1 class="massive in-left"><span id="typed"></span><span id="typed-strings">
            <span>Contact</span>
            <span>접촉</span>
            <span>Kāhea</span>
            <span>Kontakt</span>
        </span>
    </h1>
</div>
</div>
<div class="row mt-5">
    <div class="col-lg-5 offset-lg-2">
      <p class="in-top">{{$contact->description}} </p>
  </div>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
      <h2 class="mt-5">{{$contact->contact_title}}</h2>
      <form class="mt-4 mb-n10" action="{{route('front.contact.mesajGonder')}}" method="post">
        @csrf
        <div class="form-group">
          <input class="form-control" id="name" type="text" name="name" placeholder="John Doe">
      </div>
      <div class="form-group">
          <input class="form-control" id="email" type="email" name="email" placeholder="Email">
      </div>
      <div class="form-group">
          <textarea class="form-control" id="message" rows="8" name="message" placeholder="Message"></textarea>
      </div>
      <button class="btn" type="submit" style="background-color:red;">Send</button>
  </form>
</div>
</div>
</div>
</section>
<section class="pb-10 border-bottom pb-6">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <h2>{{$contact->contact_sub_title}}</h2>
          <div class="border-bottom my-5"></div>
      </div>
  </div>
  <div class="row size-sm">
    <div class="col-lg-4 offset-lg-2">
      <p><strong>Adress</strong><br>{{$contact->adress}}</p>
  </div>
  <div class="col-lg-1 offset-lg-1">
      <p> <strong>Phone<br>Mail<br></strong></p>
  </div>
  <div class="col-lg-2 text-right">
      <p>{{$contact->tel}}<br>{{$contact->mail}}</p>
  </div>
</div>
</div>
</section>
</main>
@endsection