<?php
namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Http\Model\PostsModel;
use Illuminate\Http\Request;

class ListController extends Controller{

    public function index(Request $request,$category_id){

        $postsLst = PostsModel::where('category_id',$category_id)->paginate(5)->toArray();

        $postList = PostsModel::where('category_id',$category_id)->get()->toArray();

        return view('font.list',[
            'postsLst'=>$postsLst,
            'category_id'=>$category_id
        ]);
    }

    public function category(Request $request,$category_id){

        $postsLst = PostsModel::where('category_id',$category_id)->get()->toArray();

        return view('font.list',['postsLst'=>$postsLst]);
    }

}