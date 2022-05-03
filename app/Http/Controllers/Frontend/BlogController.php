<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Blog};

class BlogController extends Controller
{
  public function blog()
  {
    $blogs = Blog::where('status', 1)->orderByDesc('created_at')->paginate(16);
    return view('frontend.blog', compact('blogs'));
}
public function blogDetail($slug)
{
    $blog = Blog::whereSlug($slug)->where('status', 1)->first();

    if (isset($blog)) {
        return view('frontend.blogDetail', compact('blog'));
    }else{
        return view('frontend.index');
    }
}

}
