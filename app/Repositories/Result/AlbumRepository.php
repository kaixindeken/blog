<?php

namespace App\Repositories\Result;

use App\Models\Album;
use App\Repositories\BaseRepository;

class AlbumRepository extends BaseRepository
{
    public function __construct(
        Album $album
    ){
        $this->model = $album;
    }

    public function getAlbumResult($id){
        return $this->model
            ->with(['article' => function($query){
                $query->with('view')
                    ->select('articles.id','articles.title');
            }])
            ->where('id',$id)
            ->first();
    }
}
