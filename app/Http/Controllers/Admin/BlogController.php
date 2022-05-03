<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\{Blog};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends AdminController
{
 public function index(){
    $bloglar = Blog::orderByDesc('created_at')->get();
    return view('backend.blog.index', compact('bloglar'));
}  

public function createIndex(){ 
    return view('backend.blog.create');
}  
public function create(Request $request){ 
    $validate = Validator::make($request->all(), [
        'title' => "required",
        'description' => "required", 
        'image' => "required"
    ]);    
    $blog = Blog::create([
        'title' => $request['title'],  
        'title_two' => $request['title_two'],  
        'slug' => Str::slug($request['title']) . "-". Str::random(3) . Str::random(1), 
        'description' => $request['description'],
        'brief_description' => $request['brief_description'],
        'description_two' => $request['description_two'],
        'description_three' => $request['description_three'],
    ]);

    if($request->hasFile('cover_image')){
        $cover_image = $request['cover_image'];
        $file_name =  Str::slug($request['title']) . "-" . Str::random(5) . "." . $cover_image->extension();
        if($cover_image->isValid()){
            $cover_image->move('uploads/bloglar', $file_name);
            Blog::find($blog->id)->update([
                'cover_image' => '/uploads/bloglar/'.$file_name
            ]);
        }
    }
    if($request->hasFile('image')){
        $image = $request['image'];
        $file_name =  Str::slug($request['title']) . "-" . Str::random(5) . "." . $image->extension();
        if($image->isValid()){
            $image->move('uploads/bloglar', $file_name);
            Blog::find($blog->id)->update([
                'image' => '/uploads/bloglar/'.$file_name
            ]);
        }
    }
    if($request->hasFile('image_two')){
        $image_two = $request['image_two'];
        $file_name =  Str::slug($request['title']) . "-" . Str::random(5) . "." . $image_two->extension();
        if($image_two->isValid()){
            $image_two->move('uploads/bloglar', $file_name);
            Blog::find($blog->id)->update([
                'imagetwo' => '/uploads/bloglar/'.$file_name
            ]);
        }
    }
    return redirect()->route('admin.blog.index')
    ->with('mesaj', 'Blog  oluşturuldu')
    ->with('mesaj_tur', 'success');
}  

public function updateIndex($id){ 
    $blog = Blog::find($id);
    return view('backend.blog.update',compact('blog'));
}  
public function update(Request $request, $id){ 
    $validate = Validator::make($request->all(), [
        'title' => "required",
        'description' => "required",
        'image' => "required"
    ]);    
    $blog = Blog::find($id)->update([
        'title' => $request['title'],  
        'title_two' => $request['title_two'],  
        'slug' => Str::slug($request['title']) . "-". Str::random(3) . Str::random(1), 
        'brief_description' => $request['brief_description'],
        'description' => $request['description'],
        'description_two' => $request['description_two'],
        'description_three' => $request['description_three'],
    ]);
 
    if($request->hasFile('cover_image')){
        $cover_image = $request['cover_image'];
        $file_name =  Str::slug($request['title']) . "-" . Str::random(5) . "." . $cover_image->extension();
        if($cover_image->isValid()){
            $cover_image->move('uploads/bloglar', $file_name);
            Blog::find($id)->update([
                'cover_image' => '/uploads/bloglar/'.$file_name
            ]);
        }
    }
    if($request->hasFile('image')){
        $image = $request['image'];
        $file_name =  Str::slug($request['title']) . "-" . Str::random(5) . "." . $image->extension();
        if($image->isValid()){
            $image->move('uploads/bloglar', $file_name);
            Blog::find($id)->update([
                'image' => '/uploads/bloglar/'.$file_name
            ]);
        }
    }
    if($request->hasFile('image_two')){
        $image_two = $request['image_two'];
        $file_name =  Str::slug($request['title']) . "-" . Str::random(5) . "." . $image_two->extension();
        if($image_two->isValid()){
            $image_two->move('uploads/bloglar', $file_name);
            Blog::find($id)->update([
                'imagetwo' => '/uploads/bloglar/'.$file_name
            ]);
        }
    }
    return redirect()->route('admin.blog.index')
    ->with('mesaj', 'Blog güncellendi')
    ->with('mesaj_tur', 'success');
}  

public function active($id){ 
    Blog::find($id)->update(['status' => 1]);
    return redirect()->route('admin.blog.index')
    ->with('mesaj', 'Blogunuz aktif edildi.')
    ->with('mesaj_tur', 'success');
}  

public function passive($id){ 
    Blog::find($id)->update(['status' => 0]);
    return redirect()->route('admin.blog.index')
    ->with('mesaj', 'Blogunuz pasif edildi.')
    ->with('mesaj_tur', 'success');
} 
public function delete($id){ 
    Blog::destroy($id);
    return redirect()->route('admin.blog.index')
    ->with('mesaj', 'Blogunuz silindi.')
    ->with('mesaj_tur', 'success');
}  

}
