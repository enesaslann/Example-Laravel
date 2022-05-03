<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Auth;
use App\Models\{User};

class AccountController extends AdminController
{
  public function index(){
    if(auth()->guard('admin')->check()){
        return redirect()->route('admin.index');
    }
    return view('backend.login');
}
public function login(Request $request){
    $validate = Validator::make($request->all(), [
        'email' => [
            'required',
            'email',
            Rule::unique('user')->ignore(null, 'id'),
        ],
        'password' => "required"
    ]);  
    if(Auth::guard('admin')->attempt(['email' => $request['email'], 'password' => $request['password']])){
 
        return redirect()->route('admin.index');
    }else{
        return back();
    }
}

public function logout(){
    Auth::guard('admin')->logout();

    return redirect()->route('admin.loginIndex');
}

}
