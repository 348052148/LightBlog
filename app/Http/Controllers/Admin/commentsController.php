<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class commentsController extends Controller{

    public function index(){


        return view('admin.comments.index',['template'=>'list']);
    }
}