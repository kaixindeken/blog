<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    //pages
    $router->resource('/articles','ArticleController');
    $router->resource('/categories','CategoryController');
    $router->resource('/site','SiteInfoController');
    $router->resource('/tag','TagController');
    $router->resource('/album','AlbumController');

    //apis
    Route::prefix('/api')->group(function (Router $router){
        $router->get('/categories', function (){
            return \App\Models\Category::query()
                ->select('id','title as text')
                ->get();
        });
    });

});
