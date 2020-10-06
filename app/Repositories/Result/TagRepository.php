<?php

namespace App\Repositories\Result;

use App\Models\Tag;
use App\Repositories\BaseRepository;

class TagRepository extends BaseRepository
{
    public function __construct(
        Tag $tag
    ){
        $this->model = $tag;
    }

    public function getTagResult($id){
        return $this->model
            ->with(['article' => function($query){
                $query->with('view')
                    ->orderBy('id','desc')
                    ->select('articles.id','articles.title');
            }])
            ->where('id',$id)
            ->first();
    }
}
