<?php


namespace App\Repositories\Share;

use App\Models\Article;
use App\Models\View;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class ArticleRepository extends BaseRepository
{

    public function __construct(
        Article $article
    ){
        $this->model = $article;
    }

    public function getArticleList(){
        return $this->model
            ->with('tag')
            ->with('view')
            ->where('category_id',1)
            ->where('deleted_at',null)
            ->orderBy('id','desc')
            ->select('id','title')
            ->get();
    }

    public function getArticleDetail($id){
        $record = DB::table('views')
            ->where('article_id',$id)
            ->first();
        if ($record){
            DB::table('views')
                ->where('article_id',$id)
                ->increment('views');
        } else {
            DB::table('views')
                ->insertOrIgnore(['article_id'=>$id, 'views'=>1]);
        }
        return $this->getById($id);
    }
}
