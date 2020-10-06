<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\Controller;
use App\Repositories\Share\TagRepository;
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

    public function getTagList(){
        $code = Code::SUCC;
        $info = $this->tagRepository->getTagList();
        return Response::json(
            1,
            $code,
            Code::$msgs[$code],
            $info
        );
    }
}
