 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title', $site->title)</title>
<meta name="description" content="@yield('description', $site->description)"> 
<meta name="keywords" content="@yield('keyword',$site->keyword)">
<link href="{{asset('/assets/css/main.bundle.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet" type="text/css"> 
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('/assets/favicon/apple-touch-icon.png')}}"> 
<link rel="icon" type="image/png" href="{{$site->fav_icon}}">  
