<?php

namespace App\Repositories\Album;

use App\Models\Album;
use App\Repositories\BaseRepository;

class AlbumRepository extends BaseRepository
{
    public function __construct(
        Album $album
    ){
        $this->model = $album;
    }

    public function getAlbums(){
        $select = array('id','title','description');
        return $this->search(null,null,null,null,$select);
    }
}
