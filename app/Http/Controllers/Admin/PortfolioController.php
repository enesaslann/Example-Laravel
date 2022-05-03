<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\{Portfolio};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PortfolioController extends AdminController
{
    public function index(){
        $portfolio = Portfolio::first();
        return view('backend.portfolio.index', compact('portfolio'));
    }
    public function update($id){
      $data = request()->all();

      Portfolio::find($id)->update([ 
        'title' => $data['title'], 
        'name' => $data['name'],  
        'description' => $data['description'],  
    ]);

      return redirect()->route('admin.portfolio.index')
      ->with('mesaj', 'Sayfa Verileri Güncellendi')
      ->with('mesaj_tur', 'success'); 
  }
}
