<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\{Team};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TeamController extends AdminController
{
 public function index(){
    $team = Team::orderByDesc('created_at')->get();
    return view('backend.team.index', compact('team'));
}

public function createIndex(){ 
    return view('backend.team.create');
}  

public function create(Request $request){ 
    $validate = Validator::make($request->all(), [
        'image' => "required"
    ]);
    $team = Team::create([
        'title' => $request['title'],   
        'name' => $request['name'],   
        'description' => $request['description']
    ]);

    if($request->hasFile('image')){
        $image = $request['image'];
        $file_name =  Str::slug($request['title']) . "-" . Str::random(5) . "." . $image->extension();
        if($image->isValid()){
            $image->move('uploads/team', $file_name);
            Team::find($team->id)->update([
                'image' => '/uploads/team/'.$file_name
            ]);
        }
    }
    return redirect()->route('admin.team.index')
    ->with('mesaj', 'Team  oluşturuldu')
    ->with('mesaj_tur', 'success');
}  

public function updateIndex($id){ 
    $team = Team::find($id);
    return view('backend.team.update',compact('team'));
}  
public function update(Request $request, $id){ 
    $validate = Validator::make($request->all(), [ 
        'image' => "required"
    ]);    
    $team = Team::find($id)->update([
        'title' => $request['title'],   
        'name' => $request['name'],   
        'description' => $request['description']
    ]);

    if($request->hasFile('image')){
        $image = $request['image'];

        $file_name =  Str::slug($request['title']) . "-" . Str::random(5) . "." . $image->extension();

        if($image->isValid()){
            $image->move('uploads/team', $file_name);
            Team::find($id)->update([
                'image' => '/uploads/team/'.$file_name
            ]);
        }
    }
    return redirect()->route('admin.team.index')
    ->with('mesaj', 'Slider güncellendi')
    ->with('mesaj_tur', 'success');
}  

public function active($id){ 
    Team::find($id)->update(['status' => 1]);
    return redirect()->route('admin.team.index')
    ->with('mesaj', 'Slider aktif edildi.')
    ->with('mesaj_tur', 'success');
}  

public function passive($id){ 
    Team::find($id)->update(['status' => 0]);
    return redirect()->route('admin.team.index')
    ->with('mesaj', 'Slider pasif edildi.')
    ->with('mesaj_tur', 'success');
} 
public function delete($id){ 
    Team::destroy($id);
    return redirect()->route('admin.team.index')
    ->with('mesaj', 'Slider silindi.')
    ->with('mesaj_tur', 'success');
}  

}
