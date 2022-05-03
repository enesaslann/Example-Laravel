<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\{Site};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SiteController extends AdminController
{

    public function index(){
        $site = Site::first();
        return view('backend.site.index', compact('site'));
    }

    public function update($id){
      $data = request()->all();

      Site::find($id)->update([ 
        'description' => $data['description'],
        'title' => $data['title'],
        'keyword' => $data['keyword'],
        'instagram' => $data['instagram'],
        'facebook' => $data['facebook'],
        'tiktok' => $data['tiktok'],
        'twitter' => $data['twitter'],
        'linkedin' => $data['linkedin'],
        'pinterest' => $data['pinterest'],
    ]);

      if(request()->hasFile('logo')){
        $logo = $data['logo'];
        $file_name =  Str::slug($data['title']) . "-" . Str::random(5) . "." . $logo->extension();
        if($logo->isValid()){
            $logo->move('uploads/site', $file_name);
            Site::find($id)->update([
                'logo' => '/uploads/site/'.$file_name
            ]);
        }
    }
    if(request()->hasFile('fav_icon')){
        $fav_icon = $data['fav_icon'];
        $file_name =  Str::slug($data['title']) . "-" . Str::random(5) . "." . $fav_icon->extension();
        if($fav_icon->isValid()){
            $fav_icon->move('uploads/site', $file_name);
            Site::find($id)->update([
                'fav_icon' => '/uploads/site/'.$file_name
            ]);
        }
    }
    return redirect()->route('admin.site.index')
    ->with('mesaj', 'Bilgiler  Güncellendi')
    ->with('mesaj_tur', 'success'); 
}
}
