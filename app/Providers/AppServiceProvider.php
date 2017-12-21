<?php

namespace App\Providers;

use App\Http\Model\CategoryModel;
use App\Http\Model\PostsModel;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('font.layout.lefBar',function ($view){
            $hotPostList = PostsModel::take(6)->get()->toArray();

            $categoryList = CategoryModel::all()->toArray();

            $view->with('hotPostList',$hotPostList);
            $view->with('categoryList',$categoryList);
        });
        view()->composer('font.layout.nav',function ($view){
            $categoryList = CategoryModel::all()->toArray();
            $view->with('categoryList',$categoryList);
        });
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
