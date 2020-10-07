<?php


namespace App\Repositories\Navigator;


use App\Models\Category;
use App\Repositories\BaseRepository;

class NavigatorRepository extends BaseRepository
{
    public function __construct(Category $category){
        $this->model = $category;
    }

    public function getMenuItems(){
        $where = array(['deleted_at',null]);
       return $this->search($where);
    }
}
