<?php

namespace App\Http\Controllers\Album;

use App\Http\Controllers\Controller;
use App\Repositories\Album\AlbumRepository;
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

    public function getAlbums(){
        $info = $this->albumRepository->getAlbums();
        $code = Code::SUCC;
        return Response::json(
            1,
            $code,
            Code::$msgs[$code],
            $info
        );
    }
}
