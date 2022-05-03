<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Blog, Slider, Team, Project, About,Portfolio, PortfolioDetail, Message, Contact};

class IndexController extends Controller
{
    public function index()
    { 
        $slider = Slider::where('status', 1)->get();
        return view('frontend.index', compact('slider'));
    }
    public function about()
    {
        $about = About::first();
        return view('frontend.about', compact('about'));
    } 
    public function contact()
    {
        $contact = Contact::first();
        return view('frontend.contact', compact('contact'));
    }
    public function create_contact(){
        $data = request()->all();
        $dil = Message::create([
            'name' => $data['name'],
            'mail' => $data['email'],
            'message' => $data['message']
        ]);

        return back()
        ->with('mesaj', 'Mesaj gönderildi.')
        ->with('mesaj_tur', 'success');
    }
    public function portfolio()
    {
     $portfolio = Portfolio::first();
     $detail = PortfolioDetail::where('status', 1)->get();

     return view('frontend.portfolio', compact('portfolio', 'detail'));
 }
 public function portfolioSlug($slug)
 {
    $project = PortfolioDetail::where('slug', $slug)->where('status', 1)->first();
    return view('frontend.workIndex', compact('project'));
}

public function blog()
{ 
    return view('frontend.blog');
}


}
