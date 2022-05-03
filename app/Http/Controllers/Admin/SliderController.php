<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\{Slider};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SliderController extends AdminController
{

   public function index(){
    $slider = Slider::orderByDesc('created_at')->get();
    return view('backend.slider.index', compact('slider'));
}  

public function createIndex(){ 
    return view('backend.slider.create');
}  
public function create(Request $request){ 
    $validate = Validator::make($request->all(), [
        'image' => "required"
    ]);
    $slider = Slider::create([
        'title' => $request['title'],   
        'link' => $request['link'],   
        'description' => $request['description']
    ]);

    if($request->hasFile('image')){
        $image = $request['image'];
        $file_name =  Str::slug($request['title']) . "-" . Str::random(5) . "." . $image->extension();
        if($image->isValid()){
            $image->move('uploads/slider', $file_name);
            Slider::find($slider->id)->update([
                'image' => '/uploads/slider/'.$file_name
            ]);
        }
    }
    return redirect()->route('admin.slider.index')
    ->with('mesaj', 'Slider  oluşturuldu')
    ->with('mesaj_tur', 'success');
}  

public function updateIndex($id){ 
    $slider = Slider::find($id);
    return view('backend.slider.update',compact('slider'));
}  
public function update(Request $request, $id){ 
    $validate = Validator::make($request->all(), [ 
        'image' => "required"
    ]);    
    $blog = Slider::find($id)->update([
        'title' => $request['title'],   
        'link' => $request['link'],   
        'description' => $request['description']
    ]);

    if($request->hasFile('image')){
        $image = $request['image'];

        $file_name =  Str::slug($request['title']) . "-" . Str::random(5) . "." . $image->extension();

        if($image->isValid()){
            $image->move('uploads/slider', $file_name);
            Slider::find($id)->update([
                'image' => '/uploads/slider/'.$file_name
            ]);
        }
    }
    return redirect()->route('admin.slider.index')
    ->with('mesaj', 'Slider güncellendi')
    ->with('mesaj_tur', 'success');
}  

public function active($id){ 
    Slider::find($id)->update(['status' => 1]);
    return redirect()->route('admin.slider.index')
    ->with('mesaj', 'Slider aktif edildi.')
    ->with('mesaj_tur', 'success');
}  

public function passive($id){ 
    Slider::find($id)->update(['status' => 0]);
    return redirect()->route('admin.slider.index')
    ->with('mesaj', 'Slider pasif edildi.')
    ->with('mesaj_tur', 'success');
} 
public function delete($id){ 
    Slider::destroy($id);
    return redirect()->route('admin.slider.index')
    ->with('mesaj', 'Slider silindi.')
    ->with('mesaj_tur', 'success');
}  

}
