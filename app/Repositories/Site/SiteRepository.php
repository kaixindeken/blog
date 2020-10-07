<?php

namespace App\Repositories\Site;

use App\Models\SiteInfo;
use App\Repositories\BaseRepository;

class SiteRepository extends BaseRepository
{
    public function __construct(SiteInfo $siteInfo){
        $this->model = $siteInfo;
    }

    /**
     * 站点名称
     * @return mixed
     */
    public function getName(){
        $where = array(['key','站点名']);
        return $this->getSingleRecord($where);
    }

    /**
     * 站点记录
     * @return mixed
     */
    public function getRecord(){
        return $this->model->whereIn('key',['站长昵称','备案号'])->get();
    }
}
