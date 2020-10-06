<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\Site\SiteRepository;
use App\Support\Code;
use App\Support\Response;

class SiteController extends Controller
{

    protected $siteRepository;

    public function __construct(
        SiteRepository $siteRepository
    )
    {
        $this->siteRepository = $siteRepository;
    }

    public function getName(){
        $info = $this->siteRepository->getName();
        $code = Code::SUCC;
        return Response::json(
            1,
            $code,
            Code::$msgs[$code],
            $info
        );
    }

    public function getRecord(){
        $info = $this->siteRepository->getRecord();
        $code = Code::SUCC;
        return Response::json(
            1,
            $code,
            Code::$msgs[$code],
            $info
        );
    }
}
