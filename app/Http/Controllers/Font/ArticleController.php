<?php
namespace App\Http\Controllers\Font;


use App\Http\Controllers\Controller;
use App\Http\Model\CategoryModel;
use App\Http\Model\PostsModel;
use Illuminate\Support\Facades\Request;


class ArticleController extends Controller{

    public function index(Request $request,$category_id,$id){

        $post = PostsModel::find($id)->toArray();

        $postList = PostsModel::all()->toArray();

        $categoryList = CategoryModel::all()->toArray();

        return view('font.article',[
            'post'=>$post,
            'postList'=>$postList,
            'categoryList'=>$categoryList,
            'category_id'=>$post['category_id']
        ]);
    }
}