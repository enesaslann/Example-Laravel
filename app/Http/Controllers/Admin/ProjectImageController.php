<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\{ProjectImage,Project};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProjectImageController extends AdminController
{

    public function index($proje){
        $image = ProjectImage::where('proje_id', $proje)->orderByDesc('created_at')->get();
        $proje= Project::find($proje);

        return view('backend.projeFoto.index', compact('image', 'proje'));
    }

    public function create($proje){
        $order = 0;
        $imageOrder = ProjectImage::where('proje_id', $proje)->orderBy('order', 'desc')->first();
        $project = Project::find($proje);

        if(isset($imageOrder)){
            $order = $imageOrder->order + 1;
        }

        if(request()->hasFile('gorsel')){
            $gorsel = request()->gorsel;
            $dosyadi =  Str::slug($project['title']) . "-" . "1" . Str::random(5) . "." . $gorsel->extension();

            if($gorsel->isValid()){
                $gorsel->move('uploads/images', $dosyadi);

                ProjectImage::create([
                    'image' => '/uploads/images/'.$dosyadi,
                    'order' => $order,
                    'proje_id' => $project['id']
                ]);
            }
            $order = $order+1;
        }

        if(request()->hasFile('gorsel_iki')){
            $gorsel = request()->gorsel_iki;
            $dosyadi =  Str::slug($project['title']) . "-" . "2" . Str::random(5) . "." . $gorsel->extension();

            if($gorsel->isValid()){
                $gorsel->move('uploads/images', $dosyadi);

                ProjectImage::create([
                    'image' => '/uploads/images/'.$dosyadi,
                    'order' => $order,
                    'proje_id' => $project['id']
                ]);
            }
            $order = $order+1;
        }

        if(request()->hasFile('gorsel_uc')){
            $gorsel = request()->gorsel_uc;
            $dosyadi =  Str::slug($project['title']) . "-" . "3" . Str::random(5) . "." . $gorsel->extension();

            if($gorsel->isValid()){
                $gorsel->move('uploads/images', $dosyadi);

                ProjectImage::create([
                    'image' => '/uploads/images/'.$dosyadi,
                    'order' => $order,
                    'proje_id' => $project['id']
                ]);
            }
            $order = $order+1;
        }

        if(request()->hasFile('gorsel_dort')){
            $gorsel = request()->gorsel_dort;
            $dosyadi =  Str::slug($project['title']) . "-" . "4" . Str::random(5) . "." . $gorsel->extension();

            if($gorsel->isValid()){
                $gorsel->move('uploads/images', $dosyadi);

                ProjectImage::create([
                    'image' => '/uploads/images/'.$dosyadi,
                    'order' => $order,
                    'proje_id' => $project['id']
                ]);
            }
            $order = $order+1;
        }

        if(request()->hasFile('gorsel_bes')){
            $gorsel = request()->gorsel_bes;
            $dosyadi =  Str::slug($project['title']) . "-" . "5" . Str::random(5) . "." . $gorsel->extension();

            if($gorsel->isValid()){
                $gorsel->move('uploads/images', $dosyadi);

                ProjectImage::create([
                    'image' => '/uploads/images/'.$dosyadi,
                    'order' => $order,
                    'proje_id' => $project['id']
                ]);
            }
            $order = $order+1;
        }

        if(request()->hasFile('gorsel_alti')){
            $gorsel = request()->gorsel_alti;
            $dosyadi =  Str::slug($project['title']) . "-" . "6" . Str::random(5) . "." . $gorsel->extension();

            if($gorsel->isValid()){
                $gorsel->move('uploads/images', $dosyadi);

                ProjectImage::create([
                    'image' => '/uploads/images/'.$dosyadi,
                    'order' => $order,
                    'proje_id' => $proje
                ]);
            } 
        }

        return redirect()->route('admin.proje.image', $proje)
        ->with('mesaj', 'Ürün görseli oluşturuldu')
        ->with('mesaj_tur', 'success');
    }

    public function createIndex($proje){
        $proje = Project::find($proje);

        return view('backend.projeFoto.olustur', compact('proje'));
    }

    public function delete($id){
        ProjectImage::destroy($id);

        return back()
        ->with('mesaj', 'Proje görseli silindi.')
        ->with('mesaj_tur', 'success');
    }
    public function orderIndex($proje){
        $image = ProjectImage::where('proje_id', $proje)->orderBy('order', 'asc')->get();
        $proje = Project::find($proje);

        return view('backend.projeFoto.sirala', compact('image', 'proje'));
    }
    public function order($proje){
        $data = request()->all();
        $count = 0;
        $json = $data['json'];

        $rooms = json_decode($json, true);

        foreach($rooms as $entry){
            ProjectImage::where('id', $entry['id'])->update([
                'order' => $count,
            ]);
            $count++;
        }

        return redirect()->route('admin.proje.image', $proje)
        ->with('mesaj', 'Görsel sırası güncellendi')
        ->with('mesaj_tur', 'success');
    }
}
