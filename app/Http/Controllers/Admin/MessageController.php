<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\{Message};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MessageController extends AdminController
{

    public function index(){
        $sorular = Message::orderByDesc('created_at')->get();
        return view('backend.message.index',compact('sorular'));
    }
    public function delete($id){

        Message::destroy($id);

        return back()
        ->with('mesaj', 'Mesaj silindi.')
        ->with('mesaj_tur', 'success');
    } 


}
