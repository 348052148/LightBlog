<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\CategoryModel;
use Illuminate\Http\Request;

class categoryController extends Controller{

    public function index(){
        $categoryList = CategoryModel::paginate(5)->toArray();

        return view('admin.category.index',['template'=>'list','List'=>$categoryList]);
    }


    public function actionCreate(Request $request){

        $category = new CategoryModel();

        $category->category_name = $request->get('category_name','');

        $category->pid = $request->get('category_pid','');

        $category->pic = $request->get('category_pic','');

        $category->save();

        return redirect('admin/category');

    }

}