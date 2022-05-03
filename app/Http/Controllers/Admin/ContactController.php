<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Contact};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ContactController extends Controller
{

    public function index(){
        $contact = Contact::first();
        return view('backend.contact.index', compact('contact'));
    }

    public function update($id){
      $data = request()->all();

      Contact::find($id)->update([ 
        'description' => $data['description'],
        'contact_title' => $data['contact_title'],
        'contact_sub_title' => $data['contact_sub_title'],
        'adress' => $data['adress'],
        'mail' => $data['mail'],
        'tel' => $data['tel'],
    ]);

      return redirect()->route('admin.contact.index')
      ->with('mesaj', 'İletişim  Güncellendi')
      ->with('mesaj_tur', 'success'); 
  }
}
