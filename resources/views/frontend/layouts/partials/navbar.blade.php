
<header class="fixed-top ">
  <div class="navbar">
    <a class="navbar-brand" href="/"> 
        <img class="default" alt="Neoto - Creative Studio Portfolio Template" src="{{$site->logo}}">
        <img class="inverted" alt="Neoto - Creative Studio Portfolio Template" src="{{$site->logo}}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="toggle-label">Menu</span>
        <span class="toggle-label-close">Close</span>
        <span class="toggle-icon">
            <span class="line"></span>
            <span class="line"></span>
        </span>
    </button>
</div>
<ul id="nav">
    <li class="nav-item active">
        <a class="nav-link" href="/">Anasayfa</a>
    </li>
    
    <li class="nav-item ">
        <a class="nav-link" href="{{route('front.about')}}">Hakkımızda</a>
    </li>
    <li class="nav-item  ">
        <a class="nav-link" href="{{route('front.portfolio')}}">Portfolio</a>
    </li>
    <li class="nav-item  ">
        <a class="nav-link" href="{{route('front.blog')}}">Blog</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('front.contact')}}">Contact</a>
    </li>
</ul>
</header>