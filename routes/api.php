<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//站点信息
Route::get('/site/name',[\App\Http\Controllers\Site\SiteController::class,'getName']);
Route::get('/site/record',[\App\Http\Controllers\Site\SiteController::class,'getRecord']);

//导航栏
Route::get('/site/nav',[\App\Http\Controllers\Navigator\NavigatorController::class,'getList']);

//标签列表
Route::get('/share/tags',[\App\Http\Controllers\Share\TagController::class,'getTagList']);

//分享列表
Route::get('/share/articles',[\App\Http\Controllers\Share\ArticleController::class,'getArticleList']);

//文章详情
Route::get('/detail',[\App\Http\Controllers\Share\ArticleController::class,'getArticleDetail']);

//标签详情与文章
Route::get('/tag',[\App\Http\Controllers\Result\TagController::class,'getTagResult']);

//热门专栏列表
Route::get('/hotspot',[\App\Http\Controllers\Share\AlbumController::class,'getHotAlbums']);

//专栏列表
Route::get('/albums',[\App\Http\Controllers\Album\AlbumController::class,'getAlbums']);

//专栏详情与文章
Route::get('/album',[\App\Http\Controllers\Result\AlbumController::class,'getAlbumResult']);
