<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\Controller;
use App\Repositories\Share\AlbumRepository;
use App\Support\Code;
use App\Support\Response;

class AlbumController extends Controller
{
    protected $albumRepository;

    public function __construct(
        AlbumRepository $albumRepository
    ){
        $this->albumRepository = $albumRepository;
    }

    public function getHotAlbums(){
        $info = $this->albumRepository->getHotAlbums();
        $code = Code::SUCC;
        return Response::json(
            1,
            $code,
            Code::$msgs[$code],
            $info
        );
    }
}
