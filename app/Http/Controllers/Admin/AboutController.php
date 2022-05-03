<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\{About};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AboutController extends AdminController
{
    public function index(){
        $about = About::first();
        return view('backend.about.index', compact('about'));
    }
    public function update($id){
      $data = request()->all();

      About::find($id)->update([ 
        'title' => $data['title'], 
        'title_description' => $data['title_description'], 
        'title_description' => $data['title_description'], 
        'one_list_title' => $data['one_list_title'], 
        'one_list_description' => $data['one_list_description'], 
        'two_list_title' => $data['two_list_title'], 
        'two_list_description' => $data['two_list_description'],
        'three_list_title' => $data['three_list_title'], 
        'three_list_description' => $data['three_list_description'], 
        'description' => $data['description'], 
        'title_two' => $data['title_two'], 
    ]);

      if(request()->hasFile('cover_image')){
        $cover_image = $data['cover_image'];
        $file_name =  Str::slug($data['title']) . "-" . Str::random(5) . "." . $cover_image->extension();
        if($cover_image->isValid()){
            $cover_image->move('uploads/about', $file_name);
            About::find($id)->update([
                'cover_image' => '/uploads/about/'.$file_name
            ]);
        }
    }
    if(request()->hasFile('one_list')){
        $one_list = $data['one_list'];
        $file_name =  Str::slug($data['title']) . "-" . Str::random(5) . "." . $one_list->extension();
        if($one_list->isValid()){
            $one_list->move('uploads/about', $file_name);
            About::find($id)->update([
                'one_list' => '/uploads/about/'.$file_name
            ]);
        }
    }
    if(request()->hasFile('two_list')){
        $two_list = $data['two_list'];
        $file_name =  Str::slug($data['title']) . "-" . Str::random(5) . "." . $two_list->extension();
        if($two_list->isValid()){
            $two_list->move('uploads/about', $file_name);
            About::find($id)->update([
                'two_list' => '/uploads/about/'.$file_name
            ]);
        }
    }
    if(request()->hasFile('three_list')){
        $three_list = $data['three_list'];
        $file_name =  Str::slug($data['title']) . "-" . Str::random(5) . "." . $three_list->extension();
        if($three_list->isValid()){
            $three_list->move('uploads/about', $file_name);
            About::find($id)->update([
                'three_list' => '/uploads/about/'.$file_name
            ]);
        }
    }
    if(request()->hasFile('image')){
        $image = $data['image'];
        $file_name =  Str::slug($data['title']) . "-" . Str::random(5) . "." . $image->extension();
        if($image->isValid()){
            $image->move('uploads/about', $file_name);
            About::find($id)->update([
                'image' => '/uploads/about/'.$file_name
            ]);
        }
    }
    return redirect()->route('admin.about.index')
    ->with('mesaj', 'Hakkımızda  Güncellendi')
    ->with('mesaj_tur', 'success'); 
}
}
