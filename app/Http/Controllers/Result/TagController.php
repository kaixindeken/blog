<?php

namespace App\Http\Controllers\Result;

use App\Http\Controllers\Controller;
use App\Repositories\Result\TagRepository;
use App\Support\Code;
use App\Support\Response;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $tagRepository;

    public function __construct(
        TagRepository $tagRepository
    ){
        $this->tagRepository = $tagRepository;
    }

    public function getTagResult(Request $request){
        $code = Code::SUCC;
        $id = $request->get('id');
        $info = $this->tagRepository->getTagResult($id);
        return Response::json(
            1,
            $code,
            Code::$msgs[$code],
            $info
        );
    }
}
