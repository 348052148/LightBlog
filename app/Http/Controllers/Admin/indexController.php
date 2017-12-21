<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class indexController extends Controller{

    public function __construct()
    {

    }

    public function index(){
        return 'INDEX';
    }

    public function home(Request $request){
        return view('admin.home.index',[]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin/home');
    }
}