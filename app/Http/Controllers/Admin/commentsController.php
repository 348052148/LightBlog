<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\CommentsModel;

class commentsController extends Controller{

    public function index(){


        $commentList = CommentsModel::paginate(5)->toArray();

        $commentList =  CommentsModel::join('posts','posts.id','=','comments.article_id')
            ->leftjoin('users','users.id','=','comments.user_id')
//            ->get(['comments.id','comments.comment_text','comments.article_id','posts.post_title'])
            ->paginate(5,['comments.id','comments.comment_text','comments.article_id','posts.post_title','users.name as username'])
            ->toArray();

        return view('admin.comments.index',['template'=>'list','List'=>$commentList]);
    }
}