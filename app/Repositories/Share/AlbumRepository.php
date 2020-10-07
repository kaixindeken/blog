<?php


namespace App\Repositories\Share;


use App\Models\Album;
use App\Repositories\BaseRepository;

class AlbumRepository extends BaseRepository
{
    public function __construct(
        Album $album
    ){
        $this->model = $album;
    }

    public function getHotAlbums(){
        $select = array('id','title');
        $orderBy = array(['id','desc']);
        return $this->search(null,null,$orderBy,10,$select);
    }
}
