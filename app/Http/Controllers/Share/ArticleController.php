<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\Controller;
use App\Repositories\Share\ArticleRepository;
use App\Support\Code;
use App\Support\Response;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleRepository;

    public function __construct(
        ArticleRepository $articleRepository
    ){
        $this->articleRepository = $articleRepository;
    }

    public function getArticleList(){
        $code = Code::SUCC;
        $info = $this->articleRepository->getArticleList();
        return Response::json(
            1,
            $code,
            Code::$msgs[$code],
            $info
        );
    }

    public function getArticleDetail(Request $request){
        $id = $request->get('id');
        $code = Code::SUCC;
        $info = $this->articleRepository->getArticleDetail($id);
        return Response::json(
            1,
            $code,
            Code::$msgs[$code],
            $info
        );
    }
}
