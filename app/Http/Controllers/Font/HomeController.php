<?php
namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Http\Model\CategoryModel;
use App\Http\Model\PostsModel;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index(){

        $postsLst = PostsModel::paginate(5)->toArray();

//        $posts =PostsModel::all()->first()->toArray();var_dump($postsLst);

        return view('font.index',['postsLst'=>$postsLst,'category_id'=>'home']);
    }

    public function search(Request $request){

        $search_str = $request->get('search_field','');

        $postsLst = PostsModel::where('post_title','like',"%{$search_str}%")->paginate(5)->toArray();

        return view('font.index',['postsLst'=>$postsLst,'category_id'=>'home','search_field'=>$search_str]);
    }

    public function searchStr(Request $request,$search_str){

        $postsLst = PostsModel::where('post_title','like',"%{$search_str}%")->paginate(5)->get()->toArray();

        var_dump($postsLst);die;

        return view('font.index',['postsLst'=>$postsLst,'category_id'=>'home','search_field'=>$search_str]);
    }
}