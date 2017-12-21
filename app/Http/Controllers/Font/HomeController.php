<?php
namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Http\Model\CategoryModel;
use App\Http\Model\PostsModel;

class HomeController extends Controller {

    public function index(){

        $postsLst = PostsModel::paginate(5)->toArray();

//        $posts =PostsModel::all()->first()->toArray();var_dump($postsLst);

        return view('font.index',['postsLst'=>$postsLst,'category_id'=>'home']);
    }
}