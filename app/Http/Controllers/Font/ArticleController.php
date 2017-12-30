<?php
namespace App\Http\Controllers\Font;


use App\Http\Controllers\Controller;
use App\Http\Model\CategoryModel;
use App\Http\Model\CommentsModel;
use App\Http\Model\PostsModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;


class ArticleController extends Controller{

    public function index(Request $request,$category_id,$id){

        $post = PostsModel::find($id)->toArray();

        $postList = PostsModel::all()->toArray();

        $categoryList = CategoryModel::all()->toArray();

        $comments = CommentsModel::where('article_id',$id)->get()->toArray();

        $user = Auth::user();
        $user = isset($user)?$user->toArray():null;

        return view('font.article',[
            'post'=>$post,
            'postList'=>$postList,
            'categoryList'=>$categoryList,
            'comments' => $comments,
            'category_id'=>$post['category_id'],
            'user' => $user
        ]);
    }

    public function comment(Request $request,$id){
//        var_dump($_REQUEST['editorValue']);
        $user = null;
        if(Auth::user()){
            $user = Auth::user()->toArray();
        }

        $comment = new CommentsModel();
        $comment->comment_text = $_REQUEST['editorValue'];
        $comment->article_id = $id; //文章id

        $comment->user_id = ($user!=null)?$user['id']:'-1'; // 无则游客
        $comment->user_name = ($user!=null)?$user['name']:'游客';


        $comment->comment_type = empty($_REQUEST['reply_user_id'])?1:2; // 1评论 2 回复

        $comment->reply_user_id = !empty($_REQUEST['reply_user_id'])?$_REQUEST['reply_user_id']:-2; // 无则评论
        $comment->reply_user_name = !empty($_REQUEST['reply_user_name'])?$_REQUEST['reply_user_name']:'游客';

        $comment->save();
        return Redirect::back();
    }
}