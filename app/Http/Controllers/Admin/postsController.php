<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\CategoryModel;
use App\Http\Model\PostsModel;
use Illuminate\Http\Request;

class postsController extends Controller{

    public function index(){

        $postList = PostsModel::paginate(5)->toArray();

        return view('admin.posts.index',['template'=>'list','List'=>$postList]);
    }

    public function edit(Request $request,$id){

        $categoryList = CategoryModel::all()->toArray();

        $post = PostsModel::find($id)->toArray();


        return view('admin.posts.index',['template'=>'edit','post'=>$post,'categoryList'=>$categoryList]);
    }

    public function create(){

        $categoryList = CategoryModel::all()->toArray();

        return view('admin.posts.index',['template'=>'edit','categoryList'=>$categoryList]);
    }

    public function actionCreate(Request $request){
        $post = new PostsModel();
        $post->post_title = $request->get('post_title');
        $post->post_desc = $request->get('post_desc');
        $post->category_id = $request->get('category_id');
        $post->post_content = $request->get('post_content');
        $post->post_tags = '英文';
        $post->save();
        return redirect('admin/posts');
    }
}