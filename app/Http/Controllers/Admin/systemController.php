<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class systemController extends Controller{

    public function index(){

        return view('admin.system.index',[]);
    }
}