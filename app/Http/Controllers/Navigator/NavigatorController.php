<?php

namespace App\Http\Controllers\Navigator;

use App\Http\Controllers\Controller;
use App\Repositories\Navigator\NavigatorRepository;
use App\Support\Code;
use App\Support\Response;
use Illuminate\Http\Request;

class NavigatorController extends Controller
{
    protected $navigatorRepository;

    public function __construct(
        NavigatorRepository $navigatorRepository
    ){
        $this->navigatorRepository = $navigatorRepository;
    }

    public function getList(){
        $data = $this->navigatorRepository->getMenuItems();
        $code = Code::SUCC;
        return Response::json(
            1,
            $code,
            Code::$msgs[$code],
            $data
        );
    }
}
