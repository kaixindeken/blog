<?php

namespace App\Http\Controllers\Result;

use App\Http\Controllers\Controller;
use App\Repositories\Result\AlbumRepository;
use App\Support\Code;
use App\Support\Response;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    protected $albumRepository;

    public function __construct(
        AlbumRepository $albumRepository
    ){
        $this->albumRepository = $albumRepository;
    }

    public function getAlbumResult(Request $request){
        $code = Code::SUCC;
        $id = $request->get('id');
        $info = $this->albumRepository->getAlbumResult($id);
        return Response::json(
            1,
            $code,
            Code::$msgs[$code],
            $info
        );
    }

}
