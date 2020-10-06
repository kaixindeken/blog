<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;

    public function article(){
        return $this->belongsTo(
            Article::class,
            'article_id',
            'id'
        );
    }
}
