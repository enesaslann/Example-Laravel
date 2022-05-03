<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\{PortfolioDetail};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProjectController extends AdminController
{
 public function index(){
    $proje = PortfolioDetail::orderByDesc('created_at')->get();
    return view('backend.proje.index', compact('proje'));
}  

public function createIndex(){ 
    return view('backend.proje.create');
}  
public function create(Request $request){ 

  $data = request()->all();

  $proje = PortfolioDetail::create([
    'category' => $request['category'],  
    'slug' => Str::slug($request['category']) . "-". Str::random(3) . Str::random(1), 
    'brief' => $request['brief'],
    'title_description' => $request['title_description'], 
    'one_title' => $request['one_title'],
    'one_description' => $request['one_description'],
    'two_title' => $request['two_title'],
    'two_description' => $request['two_description'],
    'three_description' => $request['three_description'],
]);

  if(request()->hasFile('cover_image')){
    $cover_image = $data['cover_image'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $cover_image->extension();
    if($cover_image->isValid()){
        $cover_image->move('uploads/project', $file_name);
        PortfolioDetail::find($proje->id)->update([
            'cover_image' => '/uploads/project/'.$file_name
        ]);
    }
}
if(request()->hasFile('image')){
    $image = $data['image'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $image->extension();
    if($image->isValid()){
        $image->move('uploads/project', $file_name);
        PortfolioDetail::find($proje->id)->update([
            'image' => '/uploads/project/'.$file_name
        ]);
    }
}
if(request()->hasFile('image_two')){
    $image_two = $data['image_two'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $image_two->extension();
    if($image_two->isValid()){
        $image_two->move('uploads/project', $file_name);
        PortfolioDetail::find($proje->id)->update([
            'image_two' => '/uploads/project/'.$file_name
        ]);
    }
}
if(request()->hasFile('image_three')){
    $image_three = $data['image_three'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $image_three->extension();
    if($image_three->isValid()){
        $image_three->move('uploads/project', $file_name);
        PortfolioDetail::find($proje->id)->update([
            'image_three' => '/uploads/project/'.$file_name
        ]);
    }
}

if(request()->hasFile('image_four')){
    $image_four = $data['image_four'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $image_four->extension();
    if($image_four->isValid()){
        $image_four->move('uploads/project', $file_name);
        PortfolioDetail::find($proje->id)->update([
            'image_four' => '/uploads/project/'.$file_name
        ]);
    }
}

if(request()->hasFile('image_five')){
    $image_five = $data['image_five'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $image_five->extension();
    if($image_five->isValid()){
        $image_five->move('uploads/project', $file_name);
        PortfolioDetail::find($proje->id)->update([
            'image_five' => '/uploads/project/'.$file_name
        ]);
    }
}

return redirect()->route('admin.proje.index')
->with('mesaj', 'proje  oluşturuldu')
->with('mesaj_tur', 'success');
}  

public function updateIndex($id){ 
    $proje = PortfolioDetail::find($id);
    return view('backend.proje.update',compact('proje'));
}  
public function update(Request $request, $id){ 

  $data = request()->all();

  $proje = PortfolioDetail::where('id', $id)->update([
    'category' => $request['category'],  
    'slug' => Str::slug($request['category']) . "-". Str::random(3) . Str::random(1), 
    'brief' => $request['brief'],
    'title_description' => $request['title_description'], 
    'one_title' => $request['one_title'],
    'one_description' => $request['one_description'],
    'two_title' => $request['two_title'],
    'two_description' => $request['two_description'],
    'three_description' => $request['three_description'],
]);

  if(request()->hasFile('cover_image')){
    $cover_image = $data['cover_image'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $cover_image->extension();
    if($cover_image->isValid()){
        $cover_image->move('uploads/project', $file_name);
        PortfolioDetail::find($id)->update([
            'cover_image' => '/uploads/project/'.$file_name
        ]);
    }
}
if(request()->hasFile('image')){
    $image = $data['image'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $image->extension();
    if($image->isValid()){
        $image->move('uploads/project', $file_name);
        PortfolioDetail::find($id)->update([
            'image' => '/uploads/project/'.$file_name
        ]);
    }
}
if(request()->hasFile('image_two')){
    $image_two = $data['image_two'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $image_two->extension();
    if($image_two->isValid()){
        $image_two->move('uploads/project', $file_name);
        PortfolioDetail::find($id)->update([
            'image_two' => '/uploads/project/'.$file_name
        ]);
    }
}
if(request()->hasFile('image_three')){
    $image_three = $data['image_three'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $image_three->extension();
    if($image_three->isValid()){
        $image_three->move('uploads/project', $file_name);
        PortfolioDetail::find($id)->update([
            'image_three' => '/uploads/project/'.$file_name
        ]);
    }
}

if(request()->hasFile('image_four')){
    $image_four = $data['image_four'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $image_four->extension();
    if($image_four->isValid()){
        $image_four->move('uploads/project', $file_name);
        PortfolioDetail::find($id)->update([
            'image_four' => '/uploads/project/'.$file_name
        ]);
    }
}

if(request()->hasFile('image_five')){
    $image_five = $data['image_five'];
    $file_name =  Str::slug($data['category']) . "-" . Str::random(5) . "." . $image_five->extension();
    if($image_five->isValid()){
        $image_five->move('uploads/project', $file_name);
        PortfolioDetail::find($id)->update([
            'image_five' => '/uploads/project/'.$file_name
        ]);
    }
}

return redirect()->route('admin.proje.index')
->with('mesaj', 'Proje güncellendi')
->with('mesaj_tur', 'success');
}  

public function active($id){ 
    PortfolioDetail::find($id)->update(['status' => 1]);
    return redirect()->route('admin.proje.index')
    ->with('mesaj', 'Proje aktif edildi.')
    ->with('mesaj_tur', 'success');
}  

public function passive($id){ 
    PortfolioDetail::find($id)->update(['status' => 0]);
    return redirect()->route('admin.proje.index')
    ->with('mesaj', 'Proje pasif edildi.')
    ->with('mesaj_tur', 'success');
} 
public function delete($id){ 
    PortfolioDetail::destroy($id);
    return redirect()->route('admin.proje.index')
    ->with('mesaj', 'Proje silindi.')
    ->with('mesaj_tur', 'success');
}  

}
