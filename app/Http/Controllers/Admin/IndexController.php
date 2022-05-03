<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class IndexController extends AdminController
{
    public function index(){
        return view('backend.index');
    }   
}
