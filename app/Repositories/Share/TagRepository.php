<?php


namespace App\Repositories\Share;


use App\Models\Tag;
use App\Repositories\BaseRepository;

class TagRepository extends BaseRepository
{
    public function __construct(
        Tag $tag
    ){
        $this->model = $tag;
    }

    public function getTagList(){
        $select = array('id','title','description','color');
        return $this->search(null,null,null,null,$select);
    }
}
